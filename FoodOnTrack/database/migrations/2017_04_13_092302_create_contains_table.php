<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contains', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();
            $table->integer('rest_id')->unsigned();
            $table->integer('dish_id')->unsigned();
            $table->integer('price');

            $table->primary(['rest_id', 'dish_id']);

            $table->foreign('rest_id')->references('rest_id')->on('restaurants')->onDelete('cascade');

            $table->foreign('dish_id')->references('dish_id')->on('foods')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contains');
    }
}
