<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => [
                'nome' => 'Minha amiga querida Bárbara',
                'status' => '2 empregos',
                'cnpj' => '07650801250',
                'ddd' => '91', //Belém
                'telefone' => '986112441'
            ],

            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '85', //Fortaleza
                'telefone' => '0000-0000'
            ],

            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '32', //Juiz de Fora
                'telefone' => '0000-0000'
            ]
        ];
        
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
