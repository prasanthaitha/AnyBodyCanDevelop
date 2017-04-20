<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();
            $table->increments('cust_id');
            $table->string('c_name')->nullable();
            $table->string('c_mail')->nullable();
            $table->integer('c_mobile')->nullable();
            $table->integer('pnr')->nullable();
            $table->string('coach_no')->nullable();
            $table->integer('seat_no')->nullable();
            $table->integer('train_no')->nullable();


            $table->foreign('train_no')->references('train_no')->on('trains')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
