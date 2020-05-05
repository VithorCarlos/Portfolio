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
        $page->setData([$error->getMessage(Recapcha::SESSION_ERROR)]);
        $page->setRender('home.html');
    }

    /** Logout controller */
    public function logout()
    {
        $page = new Page();
        $page->setData();
        $page->setRender('home.html');
    }

    /** Register controller */
    public function getRegister()
    {
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

        $captcha = new Recapcha();
        $recaptcha = $captcha->verifyCaptcha($_POST['g-recaptcha-response']);
        if ($recaptcha !== true) {
            header("Location: /");
            exit;
        }

        header("Location: /site/list");
        exit;
    }
}
