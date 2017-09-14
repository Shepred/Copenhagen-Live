<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDispatchToArrivalBooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('arrival_bookings', function (Blueprint $table) {
            $table->string('ctot')->nullable();
            $table->string('stand')->nullable();
            $table->text('admin_remarks')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('arrival_bookings', function (Blueprint $table) {
        });
    }
}
