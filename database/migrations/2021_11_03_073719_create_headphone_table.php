<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadphoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headphone', function (Blueprint $table) {
            $table->id();
            $table->string('name_headphone');
            $table->string('nama_brand');
            $table->integer('tahun');
            $table->boolean('ANC');
            $table->string('tipe_headphone');
            $table->string('wireless');
            $table->string('enclosure');
            $table->boolean('mic');
            $table->integer('harga');
            $table->integer('rating');
            $table->string('image_path_headphone');
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
        Schema::dropIfExists('headphone');
    }
}
