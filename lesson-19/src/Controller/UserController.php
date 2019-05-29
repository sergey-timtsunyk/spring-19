<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Service\TransformInterface;
use App\Service\TransformStrategy;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @var TransformStrategy
     */
    private $transformStrategy;

    /**
     * @var UserRepository
     */
    private $repositoryUser;

    public function __construct(TransformStrategy $transformStrategy)
    {
        $this->transformStrategy = $transformStrategy;
        //$this->repositoryUser = $this->getDoctrine()->getRepository(User::class);
    }

    /**
     * @Route("/user", name="user")
     */
    public function index()
    {



        $repositoryUser = $this->getDoctrine()->getRepository(User::class);

        $users = $repositoryUser->findAll();


        $transform = $this->transformStrategy->getTransform('string');
        $str = $transform->convert($users);



        return $this->render('user/index.html.twig', [
            'users' => $users,
            'str' => $str
        ]);
    }
}
