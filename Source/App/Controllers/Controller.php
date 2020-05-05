<?php

namespace Source\App\Controllers;


abstract class Controller
{
    protected $seo;

    public function __construct()
    {
        
    }



    public function ajaxResponse(string $parameter, array $values): string
    {
        return json_encode([$parameter => $values]);
    }
}
