<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        
        Schema::dropIfExists('post');

       
        Schema::create('post', function (Blueprint $table) {
            $table->uuid('id')->primary(); 
            $table->string('title');
            $table->string('body');
            $table->string('auther');
            $table->boolean('published')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
       
        Schema::dropIfExists('post');
    }
};