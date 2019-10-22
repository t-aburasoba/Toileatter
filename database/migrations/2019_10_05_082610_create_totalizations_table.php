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
            $table->integer('probability_enter_male');
            $table->integer('probability_enter_female');
            $table->string('beautifulness_male',30)->default('未回答');
            $table->string('beautifulness_female',30)->default('未回答');
            $table->integer('number_male');
            $table->integer('number_female');
            $table->timestamps();
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
