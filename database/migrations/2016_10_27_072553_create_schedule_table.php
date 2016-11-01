<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('schedule', function (Blueprint $table) {
            $table->increments('id');
            $table->string('timeList');
            $table->string('showDay');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->integer('cinema_id')->unsigned();
             $table->foreign('cinema_id')->references('id')->on('cinema')->onDelete('cascade')->onUpdate('cascade');
             $table->integer('movie_id')->unsigned();
             $table->foreign('movie_id')->references('id')->on('movie')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
