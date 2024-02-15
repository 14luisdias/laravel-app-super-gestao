<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //ele traz do front-end os dados para enviar ao BD - os nomes tem de estar igual a do banco
use App\SiteContato; //trazer o models SiteContato para trabalhar com o eloquent ORM e oenviarBanco de Dados

class ContatoController extends Controller
{
    public function contato(Request $request){
        $titulo = 'Super Gestão - Contato';

        //$contato = new SiteContato();
        $motivo_contato = [
            '1' => 'Dúvida',
            '2' => 'Elogio',
            '3' => 'Reclamação'
        ];
        return view('sites.contato',compact('titulo', 'motivo_contato'));
        //return view('sites.contato', ['titulo'=>$titulo, 'motivo_contato'=>$motivo_contato]);
        /*
        //print_r($_POST);
        echo'<pre>';
        print_r($request->all());
        echo'</pre>';
        */
       /*
        if ($request->input('nome') != null){
            //uma maneira de slavar - no meu não deu certo assim
            $contato = new SiteContato(); //instanciar a minha classe do meu models
            $contato->nome = $request->input('nome');
            $contato->telefone = $request->input('telefone');
            $contato->email = $request->input('email');
            $contato->motivo_contato = $request->input('motivo_contato');
            $contato->mensagem = $request->input('mensagem');
            //print_r($contato->getAttributes());
            $contato->save();
        } else {
            # code...
            
        }
        */     
        
        /*
        $contato->fill($request->all());
        //$contato->nome = 'Jorge';
        //print_r($contato->getAttributes());
        $contato->save();
        */

       
           
    }
    public function salvar(Request $request){

        //$contato = new SiteContato();
        //validar os dados dados da request
        $request->validate([
            'nome'=>'required|min:3|max:40', //nomes com no mínimo 3 carateres e maximo de 40
            'telefone'=>'required',
            'email'=>'required',
            'motivo_contato'=>'required',
            'mensagem'=>'required|max:2000'
            
        ]);
        //SiteContato::create($request->all());
   
   }
}
