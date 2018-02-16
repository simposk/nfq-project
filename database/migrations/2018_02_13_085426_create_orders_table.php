<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity');
            $table->string('color');
            $table->integer('battery');
            $table->integer('price');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('city');
            $table->string('address')->index();
            $table->string('postalcode');
            $table->string('phonenumber');
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
        Schema::dropIfExists('uzsakymas');
    }
}
