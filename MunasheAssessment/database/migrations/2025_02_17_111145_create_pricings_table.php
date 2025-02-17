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
        Schema::create('pricings', function (Blueprint $table) {
            $table->id();
            $table->string('menu_title');
            $table->string('menu_desc');
            $table->string('plan_name');
            $table->string( 'price');
            $table->string('desc');
            $table->string('feature_title');
            $table->string('featureone');
            $table->string('featuretwo');
            $table->string('featurethree');
            $table->string('featurefour');
            $table->string('button_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricings');
    }
};
