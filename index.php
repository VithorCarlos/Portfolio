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

    /** Save error */
    $app->post('/register-error', 'Source\App\Controllers\Web:setRegisterError');

    /** Edit error client */
    $app->get('/edit-error', 'Source\App\Controllers\Web:getEditError');

    /** Delete error client */
    $app->delete('/edit-error/:iderror/:idclient', 'Source\App\Controllers\Web:getDeleteError');
});
/** End Site Group*/


$app->run();

ob_end_flush();
