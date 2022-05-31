<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Invoice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Invoice',function(Blueprint $table){
            $table->id();
            $table->bigInteger('CustomerID');
            $table->bigInteger('VehicleID');
            $table->bigInteger('OrderID');
            $table->date('Date');
            $table->decimal('subtotal',20,2);
            $table->decimal('Tax',20,2);
            $table->decimal('Finaltotal',20,2);
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
        Schema::dropIfExists('Invoice');
    }
}
