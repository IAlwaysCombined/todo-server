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
        Schema::create('check_list_items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('is_completed');
            $table->foreignId('check_list_id')
                ->nullable()
                ->references('id')
                ->on('check_lists')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('check_list_items');
    }
};
