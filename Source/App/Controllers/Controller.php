<?php

namespace Source\App\Controllers;

abstract class Controller
{
    
    public function __construct()
    {
        
    }

    public function ajaxResponse($response)
    {
        return json_encode($response);
    }
}
