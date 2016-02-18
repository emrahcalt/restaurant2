<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUrunler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urunler', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('kategori');
            $table->string('urunadi')->unigue();
            $table->string('gorsel');
            $table->double('fiyat');
            $table->text('aciklama');
            $table->smallInteger('aktif');
            $table->string('ingilizcekarakter');

        });//
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('urunler');
    }
}
