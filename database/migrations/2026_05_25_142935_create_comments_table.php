<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();

            #comment
            $table->string('content');

            #Foreign With news ID
            $table->bigInteger('news_id')->unsigned();

            #Foreign With User ID
            $table->bigInteger('user_id')->unsigned();

            #Status Of Table
            $table->tinyInteger('status')->default(0)->comment('0:pending,1:accept,2:reject');

            $table->timestamps();

            #Foreign Key Relation
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('news_id')->references('id')->on('news');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
