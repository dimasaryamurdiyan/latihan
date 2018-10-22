<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()//create table
    {
        Schema::create('user', function (Blueprint $table) {//
            $table->increments('id');
            $table->string('nama');//membuat kolom nama
            $table->string('username');//membuat kolom nama
            $table->string('password');//membuat kolom nama
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()//drop table
    {
        Schema::dropIfExists('user');
    }
}
