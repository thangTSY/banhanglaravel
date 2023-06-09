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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('describe');
            $table->integer('parent_id')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::drop('categories');
        Schema::dropIfExists('categories');
    }
};
