<?php
require_once '../controladores/productos_controller.php';

    $controller = new productos_controller();
    $controller->indexProductos();