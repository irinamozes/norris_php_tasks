<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllgoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allgoods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('goodname');
            $table->string('image');
            $table->decimal('price', 10,2);
            $table->integer('category_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('category_id')
            ->references('id')->on('categories')
            ->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('allgoods');
    }
}
