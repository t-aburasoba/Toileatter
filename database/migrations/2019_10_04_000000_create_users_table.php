<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('station_id')->nullable();;
            $table->unsignedBigInteger('route_id')->nullable();;
            $table->string('name')->default('ゲスト')->nullable();
            $table->string('user_image', 255)->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('gender')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('station_id')
            ->references('id')
            ->on('stations')
            ->onDelete('cascade');

            $table->foreign('route_id')
            ->references('id')
            ->on('routes')
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
        Schema::dropIfExists('users');
    }
}
