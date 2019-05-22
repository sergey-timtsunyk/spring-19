<?php


namespace App\Controller;


use App\Config\FactoryModel;
use App\Model\User;
use Doctrine\ActiveRecord\Exception\NotFoundException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ServerRequestInterface;

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
        $users = $this->user->findAll();

        $this->render('users_index', [ 'users' => $users]);
    }

    public function formUpdate(ServerRequestInterface $request)
    {
        $query = $request->getQueryParams();

        if (array_key_exists('id', $query)) {
            try {
                $user = $this->user->find($query['id']);
            } catch (NotFoundException $e) {
                $request->getUri();

                $this->redirect('/not-found');
            }

            if ($request->getMethod() === 'POST') {

                $data = $request->getParsedBody();

                $user->setFirstName($data['firstName']);
                $user->setLastName($data['lastName']);
                $user->setEmail($data['email']);
                $user->setBirthday($data['birthday']);
                $user->update();

                $this->redirect('/users');
            }

            $this->render('users_form_update', [ 'user' => $user]);
        } else {
            $this->redirect('/users');
        }
    }

    public function formCreate(ServerRequestInterface $request)
    {
        if ($request->getMethod() === 'POST') {

            $data = $request->getParsedBody();

            /** @var User $user */
            $user = $this->user;

            $user->setFirstName($data['firstName']);
            $user->setLastName($data['lastName']);
            $user->setEmail($data['email']);
            $user->setBirthday($data['birthday']);
            $user->save();

            $this->redirect('/users');
        } else {
            $this->render('users_form_create');
        }
    }

    public function delete(ServerRequestInterface $request)
    {

    }
}