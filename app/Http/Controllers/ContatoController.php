<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request){
        //print_r($_POST);
        echo'<pre>';
        print_r($request->all());
        echo'</pre>';
        $titulo = 'Super Gestão - Contato';
        return view('sites.contato',compact('titulo'));
           
    }
}
