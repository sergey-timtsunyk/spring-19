<?php


namespace App\Controller;


use App\Config\FactoryModel;
use App\Model\User;
use App\Validation\Exception\ValidateException;
use App\Validation\User\RuleEmailValid;
use App\Validation\User\RuleFirstNameNotEmpty;
use App\Validation\User\RuleLastNameNotEmpty;
use App\Validation\ValidationFactory;
use Doctrine\ActiveRecord\Exception\NotFoundException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ServerRequestInterface;

class UserController extends BaseController
{
    /**
     * @var User
     */
    private $user;

    /**
     * @var ValidationFactory
     */
    private $validation;

    public function __construct()
    {
        $this->user = FactoryModel::createModel(User::class);
        $this->validation = new ValidationFactory([
            new RuleFirstNameNotEmpty(),
            new RuleLastNameNotEmpty(),
            new RuleEmailValid(),
        ]);
    }

    public function index(RequestInterface $request)
    {
        $users = $this->user->findAll();

        $this->render('users_index', [ 'users' => $users]);
    }

    public function formUpdate(ServerRequestInterface $request)
    {
        $query = $request->getQueryParams();
        $validate = [];

        if (array_key_exists('id', $query)) {
            try {
                $user = $this->user->find($query['id']);
            } catch (NotFoundException $e) {
                $this->redirect('/not-found');
            }

            if ($request->getMethod() === 'POST') {

                $data = $request->getParsedBody();

                try {
                    $this->validation->data($data);
                } catch (ValidateException $e) {
                    $validate[$e->getKey()] = $e->getMessage();
                }

                $user->setFirstName($data['firstName']);
                $user->setLastName($data['lastName']);
                $user->setEmail($data['email']);
                $user->setBirthday($data['birthday']);

                if (empty($validate)) {
                    $user->update();
                    $this->redirect('/users');
                }
            }

            $this->render('users_form_update', [ 'user' => $user, 'validate' => $validate]);
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