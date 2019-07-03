<?php

namespace App\Controller\Web;

use App\Entity\BidHistory;
use App\Entity\Product;
use App\Entity\User;
use App\Sevices\CreateBid;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @var CreateBid
     */
    private $createBid;

    /**
     * ProductController constructor.
     * @param CreateBid $createBid
     */
    public function __construct(CreateBid $createBid)
    {
        $this->createBid = $createBid;
    }
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
    public function takeBid($id, Request $request)
    {
        $amount = $request->request->get('amount');
        /** @var Product $product */
        $product = $this->getDoctrine()->getRepository(Product::class)->find($id);
        /** @var User $user */
        $user = $this->getUser();

        $res = $this->createBid->create($user, $product, $amount);

        if (!$res) {
            return $this->json(['error' => 'Not create bid!'], 400);
        }

        $bids = $this->getDoctrine()->getRepository(BidHistory::class)->findBy(['product' => $product]);
        $res = [];
        foreach ($bids as $bid) {
            $res[] = [
                'user_name' => $bid->getUser()->getFirstName(),
                'amount' => $bid->getBidAmount(),
                'datetime' => $bid->getBidTime(),
            ];
        }

        return $this->json(['bids' => $res, 'count' => count($bids)]);
    }
}