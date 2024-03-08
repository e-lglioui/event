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
        Schema::create('reservers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('reservation_id')->unsigned()->index()->nullable();
            $table->foreign('reservation_id')->references('id')->on('reservations')->onDelete('cascade');

            $table->bigInteger('tickit_id')->unsigned()->index()->nullable();
            $table->foreign('tickit_id')->references('id')->on('tickits')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservers');
    }
};
