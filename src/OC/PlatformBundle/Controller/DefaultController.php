<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
       // return $this->render('OCPlatformBundle:Default:index.html.twig'); // Ne fonctionne, bizarement

        return $this->render('@OCPlatform/Default/index.html.twig');
    }
}
