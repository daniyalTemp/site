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
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->string('phone');
            $table->string('address')->nullable()->default(null);
            $table->string('instagram')->nullable()->default(null);
            $table->string('telegram')->nullable()->default(null);
            $table->string('github')->nullable()->default(null);
            $table->string('linkedin')->nullable()->default(null);
            $table->string('youtube')->nullable()->default(null);
            $table->string('image');
            $table->string('googleApi')->nullable()->default(null);
            $table->text('about');
            $table->string('birthday');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configs');

    }
};
