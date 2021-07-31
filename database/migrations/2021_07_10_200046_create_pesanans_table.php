<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id'); //klien
            // $table->bigInteger('tipe_id'); //kategori type
            $table->bigInteger('model_id'); //kategori model
            $table->bigInteger('job_id'); //pemilihan desain/kontruksi
            $table->string('building_area')->nullable(); //luas
            $table->string('building_length')->nullable(); //panjang
            $table->string('building_width')->nullable(); //lebar
            $table->string('package_type')->nullable(); //jenis paket
            // $table->string('price_package')->nullable(); //paket harga untuk kontruksi
            $table->string('address')->nullable(); //alamat
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
        Schema::dropIfExists('pesanans');
    }
}
