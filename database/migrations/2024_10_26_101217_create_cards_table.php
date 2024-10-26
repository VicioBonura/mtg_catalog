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
        Schema::create('supertypes', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string('name')->unique();
        });

        Schema::create('rarities', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string('name')->unique();
        });

        Schema::create('cards', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string('name');
            $table->foreignId('set_id')->constrained('sets');
            $table->foreignId('supertype_id')->nullable()->constrained('supertypes')->onDelete('set null');
            $table->foreignId('rarity_id')->nullable()->constrained('rarities')->onDelete('set null');
            $table->string('mana_cost')->nullable();
            $table->integer('cmc')->nullable();
            $table->string('number')->nullable();
            $table->timestamps();
        });

        Schema::create('card_variants', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->foreignId('card_id')->constrained('cards')->onDelete('cascade');
            $table->string('language');
            $table->boolean('is_foil');
            $table->integer('quantity');
            $table->timestamps();
        });

        Schema::create('market_infos', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->foreignId('card_variant_id')->constrained('card_variants')->onDelete('cascade');
            $table->decimal('value_eur', 10, 2);
            $table->decimal('value_usd', 10, 2);
            $table->timestamps();
        });

        Schema::create('types', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string('name')->unique();
        });

        Schema::create('card_type', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->foreignId('card_id')->constrained('cards')->onDelete('cascade');
            $table->foreignId('type_id')->constrained('types')->onDelete('cascade');
        });

        Schema::create('subtypes', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string('name')->unique();
        });

        Schema::create('card_subtype', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->foreignId('card_id')->constrained('cards')->onDelete('cascade');
            $table->foreignId('subtype_id')->constrained('subtypes')->onDelete('cascade');
        });

        Schema::create('colors', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string('name')->unique();
            $table->string('code');
            $table->string('symbol')->nullable();
        });

        Schema::create('card_color', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->foreignId('card_id')->constrained('cards')->onDelete('cascade');
            $table->foreignId('color_id')->constrained('colors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supertypes');
        Schema::dropIfExists('rarities');
        Schema::dropIfExists('cards');
        Schema::dropIfExists('card_variants');
        Schema::dropIfExists('market_infos');
        Schema::dropIfExists('types');
        Schema::dropIfExists('card_type');
        Schema::dropIfExists('subtypes');
        Schema::dropIfExists('card_subtype');
        Schema::dropIfExists('colors');
        Schema::dropIfExists('card_color');
    }
};
