<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacedOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('placed_orders', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();
            $table->integer('cust_id')->unsigned();
            $table->integer('rest_id')->unsigned();
            $table->integer('dish_id')->unsigned();
            $table->integer('quantity');

            $table->primary(['cust_id','rest_id', 'dish_id']);

            $table->foreign('cust_id')->references('cust_id')->on('customers')->onDelete('cascade');

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
        Schema::dropIfExists('placed_orders');
    }
}
