<?php

namespace App\Controller\Web;

use App\Entity\News;
use App\Entity\Product;
use App\Repository\NewsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="web_main")
     */
    public function index()
    {
        $products = $this->getDoctrine()->getRepository(Product::class)->findAll();

        return $this->render('web/main/index.html.twig', [
            'controller_name' => 'MainController',
            'products' => $products
        ]);
    }

    /**
     * @Route("/news", name="web_news")
     */
    public function news(Request $request)
    {
        $pages = $request->get('pages', 1);
        /** @var NewsRepository $newsRepository */
        $newsRepository = $this->getDoctrine()->getRepository(News::class);

        $dateTime = $this->getDateTime($request);

        $news = $newsRepository->findPages($pages, $dateTime);
        $count = $newsRepository->pagesCount($dateTime);
        $archive = $newsRepository->archive();

        return $this->render('web/main/news.html.twig', [
            'news' => $news,
            'count' => $count,
            'archive' => $archive,
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

    /**
     * @param Request $request
     * @return \DateTime|null
     * @throws \Exception
     */
    private function getDateTime(Request $request): ?\DateTime
    {
        $month = $request->get('month');
        $year = $request->get('year');
        $dateTime = null;

        if (!empty($month) && !empty($year))  {
            $dateTime = new \DateTime();
            $dateTime->setDate($year, $month, 1);
        }

        return $dateTime;
    }
}
