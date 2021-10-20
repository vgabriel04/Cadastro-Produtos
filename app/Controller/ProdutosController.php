<?php

namespace App\Controller;

use App\Core\JsonResponse;
use App\Repository\ProdutosRepository;

class ProdutosController
{
    public function __construct()
    {
        $this->produtosRepository = new ProdutosRepository();
    }

    public function index()
    {
        $listaDeProdutos = $this->produtosRepository->findAll();
        return JsonResponse::send($listaDeProdutos, 200);
    }

    public function insert($request)
    {
        # code...
    }

    public function update($request)
    {
        # code...
    }
}
