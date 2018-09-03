<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AdvertController extends Controller
{
     public function indexAction()
    {
       // return $this->render('OCPlatformBundle:Default:index.html.twig'); // Ne fonctionne, bizarement

        return $this->render('@OCPlatform/Default/index.html.twig');
    }


    public function contactAction()
    {

        return $this->render('@OCPlatform/Advert/contact.html.twig');
    }
}


