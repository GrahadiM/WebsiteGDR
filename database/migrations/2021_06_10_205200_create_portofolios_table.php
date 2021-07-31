<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortofoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portofolios', function (Blueprint $table) {
            $table->id();
            $table->string('title'); 
            $table->bigInteger('user_id');
            // $table->bigInteger('tipe_id');
            $table->bigInteger('model_id');
            $table->bigInteger('job_id');
            // $table->bigInteger('galery_id')->nullable(); //album
            $table->string('thumbnail')->nullable();
            $table->string('building_area')->nullable();
            $table->string('building_length')->nullable();
            $table->string('building_width')->nullable();
            $table->text('desc')->nullable();
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
        Schema::dropIfExists('portofolios');
    }
}
