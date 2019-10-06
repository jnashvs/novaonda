<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('compra', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
            $table->increments('id');
		    $table->integer('valor');
		    $table->text('descricao')->nullable();
		    $table->integer('quantidade');
		    $table->integer('user_id')->unsigned();
		    $table->integer('suprimento_id')->unsigned();
		    		
		    $table->foreign('user_id')
		        ->references('id')->on('users');
		
		    $table->foreign('suprimento_id')
		        ->references('id')->on('suprimento');
		
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
        Schema::dropIfExists('compra');
    }
}
