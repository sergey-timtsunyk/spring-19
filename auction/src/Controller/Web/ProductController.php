<?php

namespace App\Controller\Web;

use App\Entity\BidHistory;
use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/slot/{id}", name="show_product")
     */
    public function getProduct($id)
    {
        $product = $this->getDoctrine()->getRepository(Product::class)->find($id);
        $bidHistory = $this->getDoctrine()->getRepository(BidHistory::class)->find($id);

        return $this->render('web/main/product.html.twig', [
            'product' => $product
        ]);
    }

    /**
     * @Route("/slot/{id}/take/bid", name="take_bid_product", methods={"post"})
     */
    public function takeBid()
    {

    }
}