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
        Schema::create('tickits', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->bigInteger('event_id')->unsigned()->index()->nullable();
            $table->foreign('event_id')->references('id')->on('events')->onDelete;
            $table->bigInteger('reservation_id')->unsigned()->index()->nullable();
            $table->foreign('reservation_id')->references('id')->on('reservations')->onDelete;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickits');
    }
};
