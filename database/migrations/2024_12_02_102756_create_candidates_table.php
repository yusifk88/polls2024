<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('party_id')->nullable();
            $table->unsignedBigInteger('constituency_id')->nullable();
            $table->string('name');
            $table->string('type')->default("mp");
            $table->text('photo_url')->nullable();
            $table->uuid();
            $table->index("constituency_id");
            $table->index("party_id");
            $table->index("type");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
