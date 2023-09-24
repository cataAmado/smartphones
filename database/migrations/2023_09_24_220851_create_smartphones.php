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
    Schema::create('smartphones', function (Blueprint $table) {
        $table->id();
        $table->string('name')->unique(); // Modificador UNIQUE para el nombre
        $table->string('brand');
        $table->date('model')->nullable(); // Modificador NOT NULL para 'model'
        $table->string('color')->default('Negro'); // Modificador DEFAULT para 'color'
        $table->integer('memory');
        $table->string('storage')->nullable(); // Modificador NOT NULL para 'storage'
        $table->float('price', 8, 2)->check('price > 0'); // Modificador CHECK para 'price'
        $table->string('screen_resolution'); // Modificador sin espacios en el nombre de columna
        $table->string('battery_duration')->nullable(); // Modificador NOT NULL para 'battery_duration'
        $table->string('os');
        $table->text('description')->comment("Descripción del smartphone");
        

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('smartphones');
    }
};
