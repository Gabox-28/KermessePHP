<?php
class main_controller{
    /*public function __construct()
    {
        require_once 'models/main_model.php';
    }*/

    public function indexMain()
    {
        require_once 'views/headerSC.php';
        require_once 'views/main.php';
    }

}