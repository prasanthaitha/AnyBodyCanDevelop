<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrossesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crosses', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();
            $table->integer('train_no');
            $table->string('stn_id');
            $table->timestamps('time');

            $table->primary(['train_no', 'stn_id']);

            $table->foreign('train_no')->references('train_no')->on('trains')->onDelete('cascade');

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
        Schema::dropIfExists('crosses');
    }
}
