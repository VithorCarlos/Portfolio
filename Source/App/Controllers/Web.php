<?php

namespace Source\App\Controllers;

use Source\App\Models\Client;
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
        if (isset($_SESSION[Client::SAVE_DATA])) $_SESSION[Client::SAVE_DATA] = NULL;
        $page = new Page();
        $client = new Client();

        $client->setValues($client->getList());

        $page->setData([
            "list_all" => $client->getList(),
            //"list_id" =>  $data[0]
        ]);

        $page->setRender("list.html");
    }

    
    public function getDetailError($iderror)
    {
        $client = new Client();

        $client->setValues($iderror);

        header("Location: /site/list");
        exit;
    }

    /** Profile controller */
    public function getProfile()
    {
        User::verifyLogin();

        if (isset($_SESSION[Client::SAVE_DATA])) $_SESSION[Client::SAVE_DATA] = NULL;

        $page = new Page();
        $error = new Error();

        $page->setData([
            "data_user" => (isset($_SESSION[User::SESSION_USER])) ? $_SESSION[User::SESSION_USER] : NULL,
            "error_update" => $error->getMessage(User::ERROR_REGISTER)
        ]);
        $error->clearMessage(User::ERROR_REGISTER);

        $page->setRender("profile.html");
    }

    /** Register error controller */
    public function getRegisterError()
    {
        User::verifyLogin();
        $page = new Page();
        $error = new Error;

        $page->setData([
            "client_error" => $error->getMessage(Client::ERROR_REGISTER),
            "error_captcha" => $error->getMessage(Recapcha::SESSION_ERROR),
            "data_client" => (isset($_SESSION[Client::SAVE_DATA])) ? $_SESSION[Client::SAVE_DATA] : NULL
        ]);
        $error->clearMessage(Client::ERROR_REGISTER);
        $error->clearMessage(Recapcha::SESSION_ERROR);

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

    public function getDeleteError($iderror)
    {
        $client = new Client();

        $client->delete($iderror);

        header("Location: /site/list");
        exit;
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
        $client = new Client();
        $client->setValues($_POST);

        $client->setValues(['Id_employee' => (int) $_SESSION[User::SESSION_USER]['Id_employee']]);

        if (!empty($_POST)) {
            $client->save();
        }

        $recaptcha = $captcha->verifyCaptcha($_POST['g-recaptcha-response']);
        if ($recaptcha !== true) {
            Error::setSession(Client::SAVE_DATA, $client->getValues());
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
            header("Location: " . FORGOT['fogort_reset'] . "?code=" . $_POST['code']);
            exit;
        }

        /** Update password */
        $user->decryptForgot($_POST['code'], $_POST['passwd']);

        header("Location: /forgot/success");
        exit;
    }

    public function setProfile()
    {
        $user = new User();
        $user->setValues($_POST);

        if ($user->updateUser()) {
            /** For update the session, when data has been updated */
            Error::setSession(User::SESSION_USER, $user->getValues());
        }

        header("Location: /site/list");
        exit;
    }
}
