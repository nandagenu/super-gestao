<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;

Route::get('/', [PrincipalController::class, 'principal']);

Route::get('/', [SobreNosController::class, 'sobrenos']);

Route::get('/', [ContatoController::class, 'contato']);

Route::get(
      '/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}',
      function(
        string $nome = 'Desconhecido', 
        string $categoria = 'Informação', 
        string $assunto = 'Contato', 
        string $mensagem = 'Mensagem não informada') {
        echo "Estamos aqui: $nome - $categoria - $assunto - $mensagem";
      }
);