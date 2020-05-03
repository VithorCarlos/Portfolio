<?php

/**
 * SITE CONFIG
 */

define("SITE", [
    "name" => "Infoeds",
    "description" => "Listagem de erros do cliente",
    "locale" => "pt_BR",
    "domain" => "exemple.com",
    "root"=> "http://localhost/ProjetoInfoeds"
]);


/**
 * GOOGLE RECAPTCHA 
 */

define("CAPTCHA", [
    "site_key" => "6LetVvEUAAAAAMujJcNyNZdZUAkwOl9-l4iwTrTn",
    "api_url" => "https://www.google.com/recaptcha/api/siteverify"
]);

/**
 * DATABASE CONFIG
 */

define("DATABASE", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "db_infoeds",
    "username" => "root",
    "passwd" => "",
]);

/**
 * PHPMAILER CONFIG
 */

define("MAILER", [
    "username" => "teste@teste.com",
    "password" => "abc",
    "host" => "smtp.gmail.com",
    "port" => 587,
    "smtp_secure" => "tls",
    "smtp_auth" => true
]);

/**
 * SOCIAL PAGE
 */

define("SOCIAL", [
    "facebook_page" => "https://www.facebook.com/TutoMasterYT",
    "facebook_author" => "TutoMaster",
    "facebook_appId" => "",
    "twitter_creator" => "@_TutoMaster",
    "twitter_site" => "@_TutoMaster"
]);

/**
 * FACEBOOK LOGIN
 */

define("FACEBOOK_LOGIN", [
    "app_id" => "",
    "app_token" => ""
]);


/**
 * TWITTER LOGIN
 */

define("TWITTER_LOGIN", [
]);


/**
 * GOOGLE LOGIN
 */

define("GOOGLE_LOGIN", [
]);

/**
 * LINKED IN LOGIN
 */

define("LINKEDIN_LOGIN", [
]);
