<?php

namespace Etheriq\Lesson5Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EtheriqLesson5Bundle:Default:index.html.twig', array('name' => $name));
    }
}
