<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //ele traz do front-end os dados para enviar ao BD - os nomes tem de estar igual a do banco
use App\SiteContato; //trazer o models SiteContato para trabalhar com o eloquent ORM e oenviarBanco de Dados
use App\MotivoContato; //trazer o models MotivoContato para trabalhar com o eloquent ORM e oenviarBanco de Dados
class ContatoController extends Controller
{
    public function contato(Request $request){
        $titulo = 'Super Gestão - Contato';

        //$contato = new SiteContato();
        $motivos_contatos = MotivoContato::all();
        return view('sites.contato',compact('titulo', 'motivos_contatos'));
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
        $regras = [
            'nome'=>'required|min:3|max:40', //nomes com no mínimo 3 carateres e maximo de 40
            'telefone'=>'required',
            'email'=>'email|unique:site_contatos',
            'motivo_contatos_id'=>'required',
            'mensagem'=>'required|max:2000'
        ];
        $feedbacks = [
            'nome.min' => 'O campo Nome, precisar ter no mínimo 3 caracteres',
            'nome.max' => 'O campo Nome, precisar ter no máximo 40 caracteres',
            'email.email' => 'O campo E-mail informado, não é válido',
            'email.unique' => 'O campo E-mail, já está cadastrado no Banco de Dados',
            'motivo_contatos_id.required' => 'O campo Qual o motivo do contato?, precisa ser selecionado',
            'mensagem.max' => 'o campo Mensagem, precisa ter no máximo 2000 caracteres',
            'required' => 'O campo :attribute, precisa ser informado' //o parametro :attribute chama o nome do campo
        ];
        //validar campos do formulário contatos
        $request->validate($regras, $feedbacks);

        SiteContato::create($request->all());
        return redirect()->route('site.index');
   
   }
}
