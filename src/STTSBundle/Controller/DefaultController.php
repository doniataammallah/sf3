<?php

namespace STTSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/emr")
     */
    public function indexAction()
    {
        return $this->render('STTSBundle:Default:index.html.twig');
    }
}
