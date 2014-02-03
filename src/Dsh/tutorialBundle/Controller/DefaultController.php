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
<<<<<<< HEAD

=======
>>>>>>> 6c74add0d693c9dc67af2368960bc49872a02ef1
