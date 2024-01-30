<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //ele traz do front-end os dados para enviar ao BD - os nomes tem de estar igual a do banco
use App\SiteContato; //trazer o models SiteContato para trabalhar com o eloquent ORM e oenviarBanco de Dados

class ContatoController extends Controller
{
    public function contato(Request $request){
        $titulo = 'Super Gestão - Contato';
        /*
        //print_r($_POST);
        echo'<pre>';
        print_r($request->all());
        echo'</pre>';
        */
        /* uma maneira de slavar - no meu não deu certo assim
        $contato = new SiteContato(); //instanciar a minha classe do meu models
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');
        //print_r($contato->getAttributes());
        $contato->save();
        */
        $contato = new SiteContato();
        
        $contato->fill($request->all());
        //$contato->nome = 'Jorge';
        //print_r($contato->getAttributes());
        $contato->save();

        return view('sites.contato',compact('titulo'));
           
    }
}
