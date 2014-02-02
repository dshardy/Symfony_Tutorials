<?php

namespace Dsh\tutorialBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DshtutorialBundle:Default:index.html.twig', array('name' => $name));
    }
}
