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
        Schema::create('sets', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string('code')->unique();
            $table->string('name');
            $table->foreignId('set_type_id')->constrained('set_types')->nullable();
            $table->foreignId('block_id')->constrained('blocks')->nullable();
            $table->integer('card_count')->nullable();
            $table->date('release_date')->nullable();
            $table->timestamps();

            // handle nullable foreign keys
            $table->foreign('set_type_id')->references('id')->on('set_types')->onDelete('set null');
            $table->foreign('block_id')->references('id')->on('blocks')->onDelete('set null');
        });

        Schema::create('blocks', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('set_types', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string('name')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sets');
        Schema::dropIfExists('blocks');
        Schema::dropIfExists('set_types');
    }
};
