<?php

namespace Milon\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AgminationController extends Controller
{
    public function firstPageAction()
    {
        return $this->render('MilonDemoBundle:AgminationView:first.html.twig');
        //return $this->render('MilonDemoBundle:AgminationView:first.html.twig', array('cheese' => $myVariable));
    }
}
