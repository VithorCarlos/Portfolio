<?php

namespace Source\App\Controllers;

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
            'data_user' => (isset($_SESSION[User::SAVE_LOGIN])) ? $_SESSION[User::SAVE_LOGIN] : NULL
        ]);
        $error->clearMessage(User::ERROR_LOGIN);
        $error->clearMessage(Recapcha::SESSION_ERROR);

        $page->setRender('home.html');
    }

    /** Logout controller */
    public function logout()
    {
        if (isset($_SESSION[User::SESSION_USER])) $_SESSION[User::SESSION_USER] = NULL;
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
            'data_user' => (isset($_SESSION[User::SAVE_DATA])) ? $_SESSION[User::SAVE_DATA] : NULL
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

    /** Forgot password controller */
    public function getForgot()
    {
        $page = new Page();
        $error = new Error();
        $page->setData(['error_forgot' => $error->getMessage(User::ERROR_FORGOT)]);
        $error->clearMessage(User::ERROR_FORGOT);

        $page->setRender("/email/forgot.html");
    }

    /** Forgot reset controller */
    public function getResetForgot()
    {
        $page = new Page();
        $error = new Error();

        $code = $_GET['code'];
        $page->setData([
            'code' => $code,
            'error' => $error->getMessage(User::ERROR_PASSWORD)
        ]);
        $error->clearMessage(User::ERROR_PASSWORD);

        $page->setRender("/email/forgot-reset.html");
    }

    /** Forgot sent controller */
    public function getSentForgot()
    {
        $page = new Page();
        $page->setRender("/email/forgot-sent.html");
    }

    /** Forgot password recover controller */
    public function getForgotSuccess()
    {
        $page = new Page();
        $page->setRender("/email/forgot-success.html");
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

    /** Send email encrypted to recover the password */
    public function setForgot()
    {
        $user = new User();
        $user->setValues($_POST);
        $user->resetPassword();

        header("Location: /forgot/sent");
        exit;
    }

    /** Recover password */
    public function setForgotReset()
    {
        $user = new User();
        $error = new Error;

        /** Verify if password match */
        try {
            if (User::passwordMatch($_POST['passwd'], $_POST['passwd2']) !== true) {
                throw new \Exception("As senhas não coincidem");
                die();
            }
        } catch (\Exception $e) {
            $error->setMessage($e->getMessage(), User::ERROR_PASSWORD);
            header("Location: ". FORGOT['fogort_reset'] . "?code=" . $_POST['code']);
            exit;
        }

        /** Update password */
        $user->decryptForgot($_POST['code'], $_POST['passwd']);

        header("Location: /forgot/success");
        exit;
    }
}
