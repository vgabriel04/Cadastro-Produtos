<?php

require_once './vendor/autoload.php';

use App\Controller\ProdutosController;

$produtosController = new ProdutosController();

$produtosController->index();
