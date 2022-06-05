<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class Customer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Customer', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Vehicle_customerID');
            $table->string('Name');
            $table->string('phone');
            $table->string('Address');
            $table->string('Location');
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
        Schema::dropIfExists('Customer');
    }
}
