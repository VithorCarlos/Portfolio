<?php

namespace Source\App\Controllers;

use Source\App\Models\Model;

use Source\App\Models\User;
use Source\Support\Error;
use Source\Support\Recapcha;

class Web
{
    /**
     * All Get Methods
     */

    /** Login controller */
    public function login()
    {
        if (isset($_SESSION[User::SAVE_DATA])) $_SESSION[User::SAVE_DATA] = NULL;

        $error = new Error;
        $page = new Page();
        
        $page->setData([
            'error_captcha' => $error->getMessage(Recapcha::SESSION_ERROR),
            'error_login' => $error->getMessage(User::ERROR_LOGIN),
            'data_user' => $_SESSION[User::SAVE_LOGIN]
        ]);
        $error->clearMessage(User::ERROR_LOGIN);
        $error->clearMessage(Recapcha::SESSION_ERROR);

        $page->setRender('home.html');
    }

    /** Logout controller */
    public function logout()
    {
        if(isset($_SESSION[User::SESSION_USER])) $_SESSION[User::SESSION_USER] = NULL;
        header("Location: /");
        exit;
    }

    /** Register controller */
    public function getRegister()
    {
        if (isset($_SESSION[User::SAVE_LOGIN])) $_SESSION[User::SAVE_LOGIN] = NULL;

        $error = new Error;
        $page = new Page();

        $page->setData([
            'error_captcha' => $error->getMessage(Recapcha::SESSION_ERROR),
            'error_register' => $error->getMessage(User::ERROR_REGISTER),
            'data_user' => $_SESSION[User::SAVE_DATA]
        ]);
        $error->clearMessage(User::ERROR_REGISTER);
        $error->clearMessage(Recapcha::SESSION_ERROR);

        $page->setRender("register.html");
    }

    /** Home controller */
    public function getHome()
    {
        User::verifyLogin();
        $page = new Page();
        $page->setRender("list.html");
    }

    /** Profile controller */
    public function getProfile()
    {
        $page = new Page();
        $page->setRender("profile.html");
    }

    /** Register error controller */
    public function getRegisterError()
    {
        $page = new Page();
        $error = new Error;
        $page->setData([$error->getMessage(Recapcha::SESSION_ERROR)]);
        $page->setRender("errors.html");
    }


    ////////////////////////////////////////////////////////////

    /**
     * All Post Methods
     */

    /** Save register */
    public function setRegister()
    {
        $user = new User();
        $captcha = new Recapcha();

        $user->setValues($_POST);
        $user->verifyUser();

        $recaptcha = $captcha->verifyCaptcha($_POST['g-recaptcha-response']);

        if ($recaptcha !== true) {
            Error::setSession(User::SAVE_DATA, $user->getValues());
            header("Location: /site/register");
            exit;
        }

        $user->save();

        if (isset($_SESSION[User::SAVE_DATA])) $_SESSION[User::SAVE_DATA] = NULL;

        header("Location: /");
        exit;
    }

    /** Save register error*/
    public function setRegisterError()
    {
        $captcha = new Recapcha();
        $recaptcha = $captcha->verifyCaptcha($_POST['g-recaptcha-response']);
        if ($recaptcha !== true) {
            header("Location: /site/register-error");
            exit;
        }

        header("Location: /site/list");
        exit;
    }

    /** Set login */
    public function setLogin()
    {
        $user = new User();
        $captcha = new Recapcha();

        $user->login($_POST['login'], $_POST['passwd']);

        $recaptcha = $captcha->verifyCaptcha($_POST['g-recaptcha-response']);
        if ($recaptcha !== true) {
            Error::setSession(User::SAVE_LOGIN, ['Login' => $_POST['login'], 'Passwd' => $_POST['passwd']]);
            header("Location: /");
            exit;
        }

        if (isset($_SESSION[User::SAVE_LOGIN])) $_SESSION[User::SAVE_LOGIN] = NULL;

        header("Location: /site/list");
        exit;
    }
}
