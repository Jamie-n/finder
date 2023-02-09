<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelYearTable extends Migration
{
    public function up()
    {
        Schema::create('model_year', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('model_id');
            $table->foreignId('year_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('model_years');
    }
}
