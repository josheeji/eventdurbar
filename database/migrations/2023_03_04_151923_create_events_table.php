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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->string('image');

            $table->string('organizer_name');
            $table->text('location');
            $table->text('description')->nullable();
            $table->date('start_date');
            $table->date('end_date');

            $table->time('event_time')->format('h:i a');

            $table->unsignedBigInteger('eventType_id');
            $table->timestamps();
            $table->foreign('eventType_id')->references('id')->on('event_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
