<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_booking');
            $table->integer('id_customer');
            $table->integer('id_kereta');
            $table->integer('id_jadwal');
            $table->integer('id_stasiun');
            $table->integer('id_tarif');
            $table->datetime('tgl_pesan');
            $table->integer('jml_tiket');
            $table->string('total_bayar');
            $table->string('token');
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
        Schema::dropIfExists('bookings');
    }
}
