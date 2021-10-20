<?php

require_once './vendor/autoload.php';

use App\Controller\ProdutosController;

$produtosController = new ProdutosController();

$request = [];
$produtosController->update($request);
