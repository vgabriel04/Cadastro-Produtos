<?php

namespace App\Repository;

class ProdutosRepository
{

    // Crie DUAS as Tabelas para Produtos e Preço.
    // Tabela de Produtos, Coluna: IDPROD, NOME, COR;
    // Tabela de Preço, Coluna: IDPRECO, PRECO ( com 2 casas Decimais);

    private $listaDeProdutosMock = [
        [
            'IDPROD' => '1',
            'NOME' => 'Caneta',
            'COR' => 'azul',
        ],
        [
            'IDPROD' => '1',
            'NOME' => 'Caneca',
            'COR' => 'vermelho',
        ],
        [
            'IDPROD' => '1',
            'NOME' => 'Cerveja',
            'COR' => 'amarelo',
        ]
    ];

    public function findAll()
    {
        return $this->listaDeProdutosMock;
    }
}
