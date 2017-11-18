<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('typeprods');
            $table->integer('fun_id')->unsigned();
            $table->foreign('fun_id')->references('id')->on('funcionarios');
            $table->string('prod_nome',25);
            $table->string('prod_patrimonio',25)->unique();
            $table->string('prod_serie',100)->unique();
            $table->string('prod_marca',100);
            $table->string('prod_modelo',100);
            $table->string('prod_status',100);
            $table->string('prod_garantia',100);
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
        Schema::dropIfExists('produtos');
    }
}
