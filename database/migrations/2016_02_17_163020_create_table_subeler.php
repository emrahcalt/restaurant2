<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSubeler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subeler', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('subeadi')->unigue();
            $table->string('adres');
            $table->string('ilce');
            $table->string('il');
            $table->double('enlem');
            $table->double('boylam');

            $table->text('aciklama');
            $table->smallInteger('aktif');
            $table->string('ingilizcekarakter')->unigue();

        });//
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('subeler');
    }
}
