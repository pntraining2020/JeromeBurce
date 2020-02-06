<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('clockdetails',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->integer('nameId');
            $table->string('clockin');
            $table->string('clockout');
            $table->string('start');
            $table->integer('end');
            $table->string('totaltimework');
            $table->string('totalbreaks');
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
        //
    }
}
