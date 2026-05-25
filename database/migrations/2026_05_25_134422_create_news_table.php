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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            #title Column
            $table->string('title');

            #short Desc Column
            $table->text('summary')->nullable();

            #desc Col
            $table->text('desc');

            #user_id foriegn with user ID
            $table->bigInteger('user_id');

            #imageUploader pass can be Null
            $table->string('image_url')->nullable();

            $table->timestamps();

            #foreign For user relation
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
