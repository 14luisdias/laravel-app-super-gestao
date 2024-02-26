<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableSiteContatosAddFkMotivoContatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //adicionando a coluna motivo_contatos_id
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->unsignedBigInteger('motivo_contatos_id')->nullable();
            $table->foreign('motivo_contatos_id')->references('id')->on('motivo_contatos');
        });
    
        // atribuindo motivo_contato para nova coluna motivo_contato_id
        DB::statement('update site_contatos set motivo_contatos_id = motivo_contato');

        //criar a coluna fk e remover a coluna motivo_contato
        Schema::table('site_contatos', function (Blueprint $table) {
            
            $table->dropColumn('motivo_contato');
        });      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //criat a coluna motivo_contato e remover a FK motivo_contatos_id
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->integer('motivo_contato')->nullable();
            $table->dropForeign('site_contatos_motivo_contatos_id_foreign');
        });
        // atribuindo motivo_contato_id para nova coluna motivo_contato
        DB::statement('update site_contatos set motivo_contato = motivo_contatos_id');

        //removendo a coluna motivo_contatos_id
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->dropColumn('motivo_contatos_id');
        });

    }
}
