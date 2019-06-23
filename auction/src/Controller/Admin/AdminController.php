<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Controller\EasyAdminController;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends EasyAdminController
{
    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function activeAction()
    {

        $id = $this->request->get('id');
        /** @var Product $product */
        $product = $this->em->getRepository(Product::class)->find($id);
        if ($product->isNew() || $product->isHide()) {
            $product->activeStatus();
        }
        $this->em->flush($product);

        return $this->redirectToRoute('easyadmin', array(
            'action' => 'list',
            'entity' => $this->request->query->get('entity'),
        ));
    }

    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function hideAction()
    {

        $id = $this->request->get('id');
        /** @var Product $product */
        $product = $this->em->getRepository(Product::class)->find($id);
        if ($product->isActive()) {
            $product->hideStatus();
        }
        $this->em->flush($product);

        return $this->redirectToRoute('easyadmin', array(
            'action' => 'list',
            'entity' => $this->request->query->get('entity'),
        ));
    }
}