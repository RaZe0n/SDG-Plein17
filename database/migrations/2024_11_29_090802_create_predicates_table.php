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
        Schema::create('predicates', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('contactperson');
            $table->string('company');
            $table->string('sector');
            $table->string('street');
            $table->string('postalcode');
            $table->string('city');
            $table->string('province');
            $table->string('involvement');
            $table->string('acknowledge');
            $table->string('steps');
            $table->string('impact');
            $table->string('collab');
            $table->string('results');
            $table->string('play');
            $table->string('proud');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('predicates');
    }
};
