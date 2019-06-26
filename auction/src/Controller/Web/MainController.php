<?php

namespace App\Controller\Web;

use App\Entity\News;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="web_main")
     */
    public function index()
    {
        return $this->render('web/main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/news", name="web_news")
     */
    public function news()
    {
        $news = $this->getDoctrine()->getRepository(News::class)->findBy(
            ['enable' => true]
        );

        return $this->render('web/main/news.html.twig', [
            'news' => $news,
        ]);
    }

    /**
     * @Route("/contact-us", name="web_contact_us")
     */
    public function contactUs()
    {
        return $this->render('web/main/contact_us.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/faq", name="web_faq")
     */
    public function faq()
    {
        return $this->render('web/main/faq.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
