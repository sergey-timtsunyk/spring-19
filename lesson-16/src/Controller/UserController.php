<?php


namespace App\Controller;


use App\Config\FactoryModel;
use App\Model\User;
use Psr\Http\Message\RequestInterface;

class UserController extends BaseController
{
    /**
     * @var User
     */
    private $user;

    public function __construct()
    {
        $this->user = FactoryModel::createModel(User::class);
    }

    public function index(RequestInterface $request)
    {
        $user = $this->user->find(1);
        var_dump($user->getEmail());
        var_dump($user->getLastName());

        $this->render('users_index');
    }

    public function form(RequestInterface $request)
    {

    }

    public function add(RequestInterface $request)
    {

    }

    public function delete(RequestInterface $request)
    {

    }

    public function update(RequestInterface $request)
    {

    }

    public function updateEmail(RequestInterface $request)
    {

    }
}