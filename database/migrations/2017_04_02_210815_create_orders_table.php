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
            $table->timestamps();
            $table->integer('user_id');
            $table->string('start');
            $table->string('end');
            $table->string('eventtype');
            $table->string('pack');
            $table->string('eventlocation');
            $table->string('eventcity');
            $table->string('fname');
            $table->string('lname');
            $table->string('phone');
            $table->integer('age');
            $table->string('email');
            $table->string('address');
            $table->string('city');
            $table->string('zip');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
