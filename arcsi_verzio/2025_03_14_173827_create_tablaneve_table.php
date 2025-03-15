<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tablaneve', function (Blueprint $table) {
            $table->id(); // automatikus ID kulcs
            $table->string('nev'); // egy oszlop nevekkel
            $table->integer('kor'); // egy oszlop korokkal
            $table->timestamps(); // létrehozás és frissítés dátuma
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tablaneve');
    }
};
