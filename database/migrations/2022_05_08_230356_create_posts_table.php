<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            //$table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->string('title', 500);
            $table->string('slug', 500);
            $table->longText('description')->nullable();
            $table->string('category', 50)->nullable();
            $table->string('tags', 50)->nullable();
            $table->tinyInteger('featured')->default(0);
            $table->enum('status', ['draft', 'published'])->default('draft')->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
