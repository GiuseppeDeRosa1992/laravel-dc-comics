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
        Schema::create('comics', function (Blueprint $comic_book) {
            $comic_book->id();


            $comic_book->string('title', 50);
            $comic_book->text('description');
            $comic_book->string('path_img', 100);
            $comic_book->decimal('price', 5, 2);
            $comic_book->date('sale_date');


            $comic_book->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
