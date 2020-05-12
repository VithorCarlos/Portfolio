<?php
ob_start();
session_start();

use Slim\Slim;

require __DIR__ . '/vendor/autoload.php';

$app = new Slim(['debug' => true]);


/** Login Router*/
$app->get('/', 'Source\App\Controllers\Web:login');

/** Set Login Router*/
$app->post('/', 'Source\App\Controllers\Web:setLogin');

/** Logout site */
$app->get('/logout', 'Source\App\Controllers\Web:logout');


/** Site Group Routes*/
$app->group('/site', function () use ($app) {

    /** Register client */
    $app->get('/register', 'Source\App\Controllers\Web:getRegister');

    /** Save register */
    $app->post('/register', 'Source\App\Controllers\Web:setRegister');

    /** Home router */
    $app->get('/list', 'Source\App\Controllers\Web:getHome');

    /** Profile router */
    $app->get('/my-profile', 'Source\App\Controllers\Web:getProfile');

    /** Register error client */
    $app->get('/register-error', 'Source\App\Controllers\Web:getRegisterError');

    /** Edit error client */
    $app->get('/edit-error', 'Source\App\Controllers\Web:getEditError');

    /** View error client */
    $app->get('/detail-error/:iderror', 'Source\App\Controllers\Web:getDetailError');

    /** Delete error client */
    $app->get('/delete-error/:iderror', 'Source\App\Controllers\Web:getDeleteError');

    /** Save error */
    $app->post('/register-error', 'Source\App\Controllers\Web:setRegisterError');

    /** Save Profile */
    $app->post('/my-profile', 'Source\App\Controllers\Web:setProfile');
});
/** End Site Group*/

/** Forgot Group */
$app->group('/forgot', function () use ($app) {

    /** Forgot password */
    $app->get('/', 'Source\App\Controllers\Web:getForgot');

    /** Forgot sent email */
    $app->get('/sent', 'Source\App\Controllers\Web:getSentForgot');

    /** Forgot reset email */
    $app->get('/reset', 'Source\App\Controllers\Web:getResetForgot');

    /** Forgot success */
    $app->get('/success', 'Source\App\Controllers\Web:getForgotSuccess');

    /** Set Forgot password */
    $app->post('/', 'Source\App\Controllers\Web:setForgot');

    /** Set Forgot password */
    $app->post('/sent', 'Source\App\Controllers\Web:setSentForgot');

    /** Set Forgot password */
    $app->post('/reset', 'Source\App\Controllers\Web:setForgotReset');
});
/** End Forgot Group*/

$app->run();

ob_end_flush();
