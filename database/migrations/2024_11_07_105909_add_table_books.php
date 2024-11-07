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
        $table->id('book_id');
        $table->string('titles');
        $table->string('author');
        $table->integer('price');
        $table->integer('stock');
        $table->timestamp();
        $table->foreign('category_id')->references('category_id')->on('sales');

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
