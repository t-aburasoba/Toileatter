<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('toilet_image_name', 255)->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('toilet_id');
            $table->integer('closet_bowl_number')->default(0);
            $table->string('beautifulness',30)->default('未回答');
            $table->string('quickly_enter',30)->default('未回答');
            $table->string('distance',30)->default('未回答');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

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
        Schema::dropIfExists('posts');
    }
}
