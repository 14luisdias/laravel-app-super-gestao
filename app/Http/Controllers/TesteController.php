<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2){
    
        //echo "A soma de $p1 e $p2, é: ". ($p1+$p2);
        //return view('sites.teste');

        //passando parametro pra VIEW via array associativo
        //return view('sites.teste',['p1'=>$p1,'p2'=>$p2]);
        
        //passando parametro pra VIEW via compact
        //return view('sites.teste', compact('p1','p2'));

        //passando parametro pra VIEW via metodo with
        return view('sites.teste')->with('p1', $p1)->with('p2', $p2);
    }




}
