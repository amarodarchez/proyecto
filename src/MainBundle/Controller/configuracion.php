<?php

$em = $this->getDoctrine()->getManager();
$config = $em->getRepository('MainBundle:Configuracion')->obtener();

foreach($config as $c)
{
    switch($c['clave']){
        case "titulo": $titulo = $c['valor']; break;
        case "descripcion": $descripcion = $c['valor']; break;
        case "email": $email = $c['valor']; break;
        case "cant_elementos": $cant_elementos = $c['valor']; break;
        case "sitio": $sitio = $c['valor']; break;
        case "mensaje": $mensajeDeshabilitado = $c['valor']; break;
        case "tiempoCancelacion": $tiempoCancelacion = $c['valor']; break;
    }
}

$args = ['titulo' => $titulo, 'descripcion' => $descripcion, 'email'=>$email, 'cant_elementos' =>$cant_elementos, 'sitio'=>$sitio, 'mensajeDeshabilitado'=>$mensajeDeshabilitado, 'tiempoCancelacion' => $tiempoCancelacion];
