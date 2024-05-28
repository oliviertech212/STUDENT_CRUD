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
        Schema::create('studentaddresses', function (Blueprint $table) {
            $table->string('postalCode');
            $table->string('street');
            $table->string('city');
            $table->string('country');
            $table->id();
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studentaddresses') ;
    }

   
};