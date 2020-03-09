<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render('app/index.html.twig');
    }
    /**
     * @Route("/installation")
     */
    public function installation()
    {
        return $this->render('app/installation.html.twig');
    }
    /**
     * @Route("/starting")
     */
    public function starting()
    {
        return $this->render('app/starting.html.twig');
    }
    /**
     * @Route("/demo")
     */
    public function demo()
    {
        return $this->render('app/demo.html.twig');
    }
}
