<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(){
        //print_r($_POST);
        $titulo = 'Super Gestão - Contato';
        return view('sites.contato',compact('titulo'));
           
    }
}
