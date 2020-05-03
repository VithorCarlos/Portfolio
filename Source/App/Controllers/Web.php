<?php

namespace Source\App\Controllers;

use Source\Support\Recapcha;

class Web
{
    /**
     * All Get Methods
     */

    /** Login controller */
    public function login()
    {
        $page = new Page();
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
        $page = new Page();
        $page->setData(['error_captcha' => Recapcha::getMessage()]);
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
        $page->setData(['error_captcha' => Recapcha::getMessage()]);
        $page->setRender("errors.html");
    }


    ////////////////////////////////////////////////////////////

    /**
     * All Post Methods
     */

    /** Save register */
    public function setRegister()
    {
        $captcha = new Recapcha();
        $recaptcha = $captcha->verifyCaptcha($_POST['g-recaptcha-response']);
        if ($recaptcha !== true) {
            header("Location: /site/register");
            exit;
        }

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
}
