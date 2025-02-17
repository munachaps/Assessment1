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
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->string('menu_title');
            $table->string('menu_heading',);
            $table->string('content_heading');
            $table->string('description');
            $table->string('content_description');
            $table->string('toggleone');
            $table->string('toggleone_desc');
            $table->string('toggletwo');
            $table->string('toggletwo_desc');
            $table->string('togglethree');
            $table->string('togglethree_desc');
            $table->string('feature_graphic');
            $table->string('cardone');
            $table->string('cardtwo');
            $table->string('cardthree');
            $table->string('cardfour');
            $table->string('cardone_desc');
            $table->string('cardtwo_desc');
            $table->string('cardthree_desc');
            $table->string('cardfour_desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('features');
    }
};
