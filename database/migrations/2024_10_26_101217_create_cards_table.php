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
        Schema::create('cards', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string('name');
            $table->foreignId('set_id')->constrained('sets');
            $table->foreignId('type_id')->constrained('types')->nullable();
            $table->foreignId('subtype_id')->constrained('subtypes')->nullable();
            $table->foreignId('rarity_id')->constrained('rarities')->nullable();
            $table->string('mana_cost')->nullable();
            $table->integer('cmc')->nullable();
            $table->foreignId('color_id')->constrained('colors')->nullable();
            $table->string('number')->nullable();
            $table->timestamps();

            // handle nullable foreign keys
            $table->foreign('type_id')->references('id')->on('types')->onDelete('set null');
            $table->foreign('subtype_id')->references('id')->on('subtypes')->onDelete('set null');
            $table->foreign('rarity_id')->references('id')->on('rarities')->onDelete('set null');
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('set null');
        });

        Schema::create('card_variants', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->foreignId('card_id')->constrained('cards');
            $table->string('language');
            $table->boolean('is_foil');
            $table->integer('quantity');
            $table->decimal('value_eur', 10, 2);
            $table->decimal('value_usd', 10, 2);
            $table->timestamps();

            // handle cascade delete
            $table->foreign('card_id')->references('id')->on('cards')->onDelete('cascade');
        });

        Schema::create('supertypes', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('types', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('subtypes', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('rarities', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('colors', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string('name')->unique();
            $table->string('code');
            $table->string('symbol')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
        Schema::dropIfExists('card_variants');
        Schema::dropIfExists('supertypes');
        Schema::dropIfExists('types');
        Schema::dropIfExists('subtypes');
        Schema::dropIfExists('rarities');
    }
};
