<?php

namespace App\Controller\Web;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/main", name="web_main")
     */
    public function index()
    {
        return $this->render('web/main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
