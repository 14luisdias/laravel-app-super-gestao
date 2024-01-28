<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $contato = new SiteContato();
        $contato->nome = 'Sistema SG';
        $contato->telefone = '(68)99244-6118';
        $contato->email = 'contato.sg@gmail.com';
        $contato->motivo_contato = 1;
        $contato->mensagem='mais informações sobre o aplicativo';
        $contato->save();
        */
        factory(SiteContato::class, 100)->create();
    }
}
