<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MotivoContato;

class PrincipalController extends Controller
{
    public function principal(){
         $motivos_contatos = MotivoContato::all();
        return view('sites.principal', ['motivos_contatos'=>$motivos_contatos]);
    }
    
}
