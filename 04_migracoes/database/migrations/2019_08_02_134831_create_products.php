<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducts extends Migration
{
    /**
     * Run the migrations.
     * Comando para criar: php artisan make:migration create_products --create=products
     * Caso o comando rollback não funcionar: 
     * Remover manualmente a migration;
     * composer dump-autoload;
     * Remover da database a ultima entrada na tabela migrations
     * Requisito: sudo apt-get install php7.2-mysql
     * Executar migration: php artisan migrate
     * Adicionar coluna:
     * php artisan make:migration add_brand_to_products --table=products
     * Apagar e recriar tabelas: php artisan migrate:refresh
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('stock');
            $table->double('price');
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
