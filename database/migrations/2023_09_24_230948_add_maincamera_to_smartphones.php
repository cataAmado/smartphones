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
        Schema::table('smartphones', function (Blueprint $table) {
            $table->string('maincamera')->nullable(); // Modificador NOT NULL para 'maincamera' 

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('smartphones', function (Blueprint $table) {


            $table->dropColumn('maincamera'); // Modificador DROP para 'maincamera'
        });
    }
};