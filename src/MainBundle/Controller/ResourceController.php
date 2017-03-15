<?php

namespace MainBundle\Controller;

use Doctrine\ORM\ORMException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MainBundle\Entity\Configuracion;
use MainBundle\MainBundle;

class ResourceController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        require_once('configuracion.php');
        return $this->render('index.html.twig', array('sitio' => $args['sitio']));
    }
}
