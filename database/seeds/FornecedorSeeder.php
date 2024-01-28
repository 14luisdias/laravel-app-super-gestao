<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'www.fornecedor100.com.br';
        $fornecedor->uf = 'AC';
        $fornecedor->email = 'fornecedor100@gmail.com';
        $fornecedor->save();
        
        //usando o método create (atenção no atributo fillable da classe Fornecedor())
        Fornecedor::create([
            'nome'=>'Fornecedor 200',
            'site'=>'www.fornecedor200.com.br',
            'uf'=>'SP',
            'email'=>'fornecedor200@gmail.com'
        ]);

        //usando o Insert
        DB::table('fornecedores')->insert([
            'nome'=>'Fornecedor 300',
            'site'=>'www.fornecedor300.com.br',
            'uf'=>'RS',
            'email'=>'fornecedor300@gmail.com'
        ]);

    }
}
