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
        Schema::create('banner_items', function (Blueprint $table) {
            $table->id(); 
            $table->string('image');
            $table->string('btn_link');

            $table->string('heading')->nullable();

            $table->string('sub_heading')->nullable();
            
            $table->text('short_description')->nullable();
            $table->unsignedBigInteger('banner_id');
            $table->foreign('banner_id')->references('id')->on('banners')->onUpdate('cascade')->onDelete('cascade');
       
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banner_items');
    }
};
