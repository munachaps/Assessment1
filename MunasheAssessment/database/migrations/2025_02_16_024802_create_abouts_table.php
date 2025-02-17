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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('heading');
            $table->string('description');
            $table->string('itemone');
            $table->string('itemtwo');
            $table->string('itemthree');
            $table->string('itemfour');
            $table->string('itemfive');
            $table->string('itemsix');
            $table->string('leader_name');
            $table->string('leader_title');
            $table->string('leader_profile');
            $table->string('phone_number');
            $table->string('call_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
