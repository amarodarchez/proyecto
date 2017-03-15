<?php

namespace MainBundle\Controller;

use Doctrine\ORM\ORMException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MainBundle\Entity\Configuracion;
use MainBundle\MainBundle;
use Symfony\Component\HttpFoundation\Request;
use MainBundle\Entity\Usuario;

class UsuarioController extends Controller
{
    private $repositorio = 'MainBundle:Usuario';

    /**
     * @Route("/login", name="login")
     */
    public function loginAction()
    {
        require_once('configuracion.php');
        return $this->render('MainBundle:Usuario:login.html.twig', array('sitio' => $args['sitio']));
    }

    /**
     * @Route("/checkLogin", name="checkLogin")
     */
    public function checkLoginAction(Request $request)
    {
        require_once('configuracion.php');
        try{
            $username = $request->get('username');
            $password = $request->get('password');
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository($this->repositorio)->findOneBy(array("usuario"=>$username, "clave"=>$password));
            if($user){
                $session = $request->getSession();
                $session->set('id', $user->getId());
                $session->set('usuario', $user->getUsuario());
                $session->set('password', $user->getClave());
                $session->set('nombre', $user->getNombre());
                $session->set('apellido', $user->getApellido());
                $session->set('email', $user->getEmail());
                $session->set('rol', $user->getRolId());
                $session->set('habilitado', $user->getHabilitado());
                return $this->redirect($this->generateUrl('home'));
            }else{
                $this->get('session')->getFlashBag()->add('error', 'Nombre de usuario o contraseña incorrectos');
                return $this->render('MainBundle:Usuario:login.html.twig', array('sitio' => $args['sitio']));
            }
        }catch (ORMException $e){
            $this->get('session')->getFlashBag()->add('error', 'Error inesperado, por favor intente nuevamente');
            return $this->render('MainBundle:Usuario:login.html.twig', array('sitio' => $args['sitio']));
        }
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction(Request $request) {
        $session = $request->getSession();
        $session->clear();
        return $this->redirect($this->generateUrl('home'));
    }

    /**
     * @Route("/registrarse", name="registrarse")
     */
    public function registrarseAction()
    {
        require_once('configuracion.php');
        return $this->render('MainBundle:Usuario:registro.html.twig');
    }

    /**
     * @Route("/saveRegistro", name="saveRegistro")
     */
    public function saveRegistroAction(Request $request)
    {
        try{
            $em = $this->getDoctrine()->getManager();
            $existe = $em->getRepository($this->repositorio)->findOneByEmail($request->get('email'));
            if(!$existe){
                $usuario = new Usuario();
                $usuario->setNombre($request->get('nombre'));
                $usuario->setApellido($request->get('apellido'));
                $usuario->setEmail($request->get('email'));
                $usuario->setDireccion($request->get('direccion'));
                $usuario->setTelefono($request->get('telefono'));
                $usuario->setPassword($request->get('password'));
                $usuario->setPreguntaSecreta($request->get('pregunta'));
                $usuario->setRespuestaSeguridad($request->get('respuesta'));
                $usuario->setIsAdmin(0);
                $usuario->setBorrado(0);
                $usuario->setFechaAlta(new \DateTime());
                $usuario->setIsPremium(0);
                $em = $this->getDoctrine()->getManager();
                $em->persist($usuario);
                $em->flush();
                $this->get('session')->getFlashBag()->add('success', 'El usuario '.$usuario->getNombre().', '.$usuario->getApellido().' fue
                creado correctamente.');
                return $this->render('MainBundle:Security:login.html.twig');
            }else{
                $this->get('session')->getFlashBag()->add('error', 'El usuario con el email '.$request->get('email').' ya se
                ecuentra registrado en el sistema.');
                return $this->render('MainBundle:Security:login.html.twig');
            }
        }catch (ORMException $e){
            $this->get('session')->getFlashBag()->add('error', 'Error inesperado, intente nuevamente.');
            return $this->render('MainBundle:Security:login.html.twig');
        }
    }



}
