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
        Schema::create('blocks', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('set_types', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string('name')->unique();
            $table->text('description')->nullable();
        });

        Schema::create('sets', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string('code')->unique();
            $table->string('name');
            $table->string('symbol_uri')->nullable();
            $table->foreignId('set_type_id')->nullable()->constrained('set_types')->onDelete('set null');
            $table->foreignId('block_id')->nullable()->constrained('blocks')->onDelete('set null');
            $table->integer('card_count')->nullable();
            $table->date('release_date')->nullable();
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
