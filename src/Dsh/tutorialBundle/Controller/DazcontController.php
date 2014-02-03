<?php

namespace Dsh\tutorialBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DazcontController extends Controller
{
    public function DazactAction($dazvariable)
    {
        return $this->render('DshtutorialBundle:Daz:daz.html.twig', array('dazvariable' => $dazvariable));
    }
}
