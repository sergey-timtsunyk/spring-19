<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @var UserRepository
     */
    private $repositoryUser;

    public function __construct()
    {
        //$this->repositoryUser = $this->getDoctrine()->getRepository(User::class);
    }

    /**
     * @Route("/user", name="user")
     */
    public function index()
    {
        $repositoryUser = $this->getDoctrine()->getRepository(User::class);

        $users = $repositoryUser->findAll();

        return $this->render('user/index.html.twig', [
            'users' => $users,
        ]);
    }
}
