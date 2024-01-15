<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ 
// ->name('') nomeando rotas
Route::get('/','PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobrenos')->name('site.sobrenos');
//***********
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@contato')->name('site.contato');
//**************
Route::get('/login', function(){return 'Login';})->name('site.login');

//app * agrupamento de rotas
Route::prefix('app')->group(function(){
        Route::get('/cliente', function(){return 'Clientes';})->name('app.cliente');
        Route::get('/fornecedor', 'FornecedorController@index')->name('app.fornecedor');
        Route::get('/produto', function(){return 'Produtos';})->name('app.produto');
});

//redirecionammento de rotas
/*
Route::get('/rota2',function(){
        return redirect()->route('site.rota1');
})->name('site.rota2');
*/
//passando parametros na Controller
Route::get('/teste/{p1}/{p2}','TesteController@teste')->name('teste');


// Rota de Contingencia (fallback)
Route::fallback(function(){
 echo 'A Rota Acessada não existe <a href="'.route('site.index').'"> clique aqui</a> para ir na página principal';
});