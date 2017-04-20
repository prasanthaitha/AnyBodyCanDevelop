<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();
            $table->increments('id');
            $table->integer('rest_id')->unsigned();
            $table->string('stn_id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('verifyToken');
            $table->integer('status')->default(0);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('rest_id')->references('rest_id')->on('restaurants')->onDelete('cascade');

            $table->foreign('stn_id')->references('stn_id')->on('stations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
