<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePaintingInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paintingInfo', function (Blueprint $table) {
            $table->id();
	        $table->string('artist_id');
            $table->string('artist_name');
            $table->string('painting_name');
            $table->string('category');
            $table->decimal('price');
            $table->string('size');
            $table->string('orientation');
            $table->string('description');
            $table->string('painting_path');
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
        Schema::dropIfExists('paintingInfo');
    }
}

