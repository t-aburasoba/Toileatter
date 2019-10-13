<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTotalizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('totalizations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('toilet_id');
            $table->integer('evaluation')->nullable();
            $table->integer('total_users');
            $table->integer('probability_enter');
            $table->timestamps();
            $table->string('beautifulness',30);
            $table->string('distance',30);

            $table->foreign('toilet_id')
            ->references('id')
            ->on('toilets')
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
        Schema::dropIfExists('totalizations');
    }
}
