<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;
use League\CommonMark\Reference\ReferenceParser;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->integer('max_persons');
            $table->string('status')->enum(['asset','reserved','available'])->default('asset');
            $table->decimal('price',10,2);
            $table->foreignId('type_id')->references('id')->on('types'); 
            $table->foreignId('user_id')->references('id')->on('users'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
