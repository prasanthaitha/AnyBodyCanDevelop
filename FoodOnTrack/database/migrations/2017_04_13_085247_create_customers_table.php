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
            $table->string('c_name');
            $table->string('c_mail');
            $table->integer('c_mobile');
            $table->integer('pnr');
            $table->string('coach_no');
            $table->integer('seat_no');
            $table->integer('train_no');


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
