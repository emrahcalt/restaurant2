<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategoriler', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('ustkategori');
            $table->string('kategoriadi')->unigue();
            $table->smallInteger('aktif');

        });//
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kategoriler');
    }
}
