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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('menu1_date')->nullable();
            $table->string('menu1_soup')->nullable();
            $table->string('menu1_main_course')->nullable();
            $table->string('menu1_dessert')->nullable();
            $table->date('menu2_date')->nullable();
            $table->string('menu2_soup')->nullable();
            $table->string('menu2_main_course')->nullable();
            $table->string('menu2_dessert')->nullable();
            $table->date('menu3_date')->nullable();
            $table->string('menu3_soup')->nullable();
            $table->string('menu3_main_course')->nullable();
            $table->string('menu3_dessert')->nullable();
            $table->text('menu_price')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
