<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->text('artical_one');
            $table->text('artical_two')->nullable();
            $table->text('artical_three')->nullable();
            $table->text('artical_fourth')->nullable();
            $table->text('artical_fifth')->nullable();
            $table->string('categories');
            $table->datetime('date')->diffForHumans();
            $table->string('author')->default('Eastern Leadexpress');
            $table->string('image')->nullable();
            $table->string('read_link')->nullable();
            $table->string('link_text')->nullable();
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
};
