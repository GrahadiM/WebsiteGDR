<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progres', function (Blueprint $table) {
            $table->id();
            $table->string('title'); //kontruksi dibuatkan dropdown unit lantai dan desain dibuatkan dropdown 3d view, rab, imb, gambar kerja
            $table->bigInteger('user_id');
            $table->bigInteger('pesanan_id');
            // $table->bigInteger('job_id');
            $table->string('image')->nullable();
            $table->string('file')->nullable();
            $table->string('status'); //aktif atau tidak aktif
            $table->string('desc');
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
        Schema::dropIfExists('progres');
    }
}
