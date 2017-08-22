<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArrivalBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arrival_bookings', function (Blueprint $table) {
            $table->integer('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->primary('callsign');
            $table->string('callsign')->unique();
            $table->string('origin');
            $table->string('destination');
            $table->string('aircraft');
            $table->time('sta');
            $table->string('email');
            $table->text('remarks')->nullable();
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
        Schema::dropIfExists('arrival_bookings');
    }
}
