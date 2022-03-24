<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblOrder', function (Blueprint $table) {
            $table->id();
            $table->integer('painting_id');
            $table->string('user_id');
		    $table->string('artist_id');
            $table->string('status');
            $table->string('payment_method');
            $table->string('payment_status');
            $table->string('address');
	        $table->bigInteger('phone');
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
        Schema::dropIfExists('tblOrder');
    }
}

