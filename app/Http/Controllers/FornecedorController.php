<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
                    'nome'  => 'Fornecedor 1',
                    'status' => 'N',
                    'cnpj' => '0',
                    'ddd' => '68',
                    'telefone' => '0 0000-0000'
            ],
            1 => [
                    'nome'  => 'Fornecedor 2',
                    'status' => 'S',
                    'cnpj' => '1.2222.3333/00',
                    'ddd' => '69',
                    'telefone' => '1 1111-2222'
            ],
            2 => [
                    'nome'  => 'Fornecedor 3',
                    'status' => 'S',
                    'cnpj' => '1.2222.3333/00',
                    'ddd' => '91',
                    'telefone' => '1 1111-2222'
            ]
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
