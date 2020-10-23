<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('birthday');
            $table->string('birthplace');
            $table->string('religious');
            $table->string('ethnicity');
            $table->string('nationality');
            $table->string('professional');
            $table->string('gender');
            $table->string('profile');
            $table->text('who');
            $table->text('career');
            $table->string('education');
            $table->text('personal');
            $table->string('about');
            $table->text('facebook')->nullable();
            $table->text('instagram')->nullable();
            $table->text('youtube')->nullable();
            $table->text('twitter')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('tiktok')->nullable();
            $table->text('website')->nullable();
            $table->timestamp('published')->nullable();
            $table->string('category_id');
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
        Schema::dropIfExists('posts');
    }
}
