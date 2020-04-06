<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('title')->nullable();
            $table->mediumText('content')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('slug')->nullable();
            $table->string('cover_img')->nullable();
            $table->string('short_desc')->nullable();
            $table->integer('view_count')->nullable();
            $table->boolean('is_published')->default(0);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
