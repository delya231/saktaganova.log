<?php

namespace Src\Controllers;

use src\models\Articles;
use src\models\Users;
use src\services\Db;
use src\exceptions\NotFoundException;
use src\exceptions\InvalidArgumentException;
use src\models\UsersAuthService;

class UsersController extends Controller
{
    public function signUp()
    {
        if (!empty($_POST)) {
            try {
                $user = Users::signUp($_POST);
            } catch (InvalidArgumentException $e) {
                $this->view->renderHtml('users/signUp.php', ['error' => $e->getMessage()]);
                return;
            }
            if ($user instanceof Users) {
                $this->view->renderHtml('users/signUpSuccess.php');
                return;
            }
        }
        $this->view->renderHtml('users/signUp.php');
    }
    public function login()
    {
        if (!empty($_POST)) {
            try {
                $user = Users::login($_POST);
                UsersAuthService::createToken($user);
                header('Location:/articles/');
                exit();
            } catch (InvalidArgumentException $e) {
                $this->view->renderHtml('users/login.php', ['error' => $e->getMessage()]);
                return;
            }
            // if ($user instanceof Users) {
            //     $this->view->renderHtml('users/loginSuccess.php');
            //     return;
            // }
        }
        $this->view->renderHtml('users/login.php');
        // return;
    }
    public function logout(){
        setcookie('token', '', -1, '/','', false, true);
        header('Location: /articles/');
        exit();
    }
}
