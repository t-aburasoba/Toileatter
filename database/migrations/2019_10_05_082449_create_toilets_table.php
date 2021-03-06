<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToiletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toilets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('station_id');
            $table->string('toilet_name', 30);
            $table->string('toilet_image_name', 255)->nullable();
            $table->double('latitude', 9,6);
            $table->double('longtitude', 9,6);
            // $table->geometry('point');
            $table->timestamps();

            $table->foreign('station_id')
                ->references('id')
                ->on('stations')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toilets');
    }
}
