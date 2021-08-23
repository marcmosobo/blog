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
            $table->bigIncrements('id');
            $table->bigInteger('author_id')->unsigned();
            $table->foreign('author_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('no action');
            $table->bigInteger('parent_id')->unsigned();
            $table->foreign('parent_id')
                ->references('id')
                ->on('posts')
                ->onUpdate('cascade')
                ->onDelete('no action');
            $table->string('title')->nullable();
            $table->string('metaTitle')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->tinyText('summary')->nullable();
            $table->tinyInteger('published')->default(0);
            $table->dateTime('publishedAt')->nullable();
            $table->text('content')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
