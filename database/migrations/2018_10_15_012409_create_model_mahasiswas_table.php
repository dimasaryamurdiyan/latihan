<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_mahasiswas', function (Blueprint $table) {
            $table->increments('nim');//membuat kolom nim dengan auto increment
            $table->string('nama');//membuat kolom nama
            $table->string('email');//membuat kolom email
            $table->string('nohp');//membuat kolom nohp
            $table->text('alamat');//membuat kolom alamat dengan tipe text
            $table->timestamps();//membuat kolom created_at dan updated_at sebagai fungsi dasar laravel
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_mahasiswas');
    }
}
