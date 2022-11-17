<?php

class MainController
{
    public function __construct()
    {
        require_once 'models/main_model.php';
    }

    public function index()
    {
        require_once 'views/main.php';
    }
}