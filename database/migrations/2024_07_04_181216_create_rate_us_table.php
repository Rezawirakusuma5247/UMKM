<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRateUsTable extends Migration
{
    public function up()
    {
        Schema::create('rate_us', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('rating');
            $table->text('message');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rate_us');
    }
}

