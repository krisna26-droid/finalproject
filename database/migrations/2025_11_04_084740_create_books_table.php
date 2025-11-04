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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title')->index();
            $table->string('isbn')->nullable()->index();
            $table->string('publisher')->nullable()->index();
            $table->year('publication_year')->nullable()->index();
            $table->enum('status', ['available', 'checked_out', 'reserved'])->default('available');

            $table->foreignId('author_id')->constrained('authors')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');

            $table->string('store_location')->nullable()->index();
            $table->integer('pages')->nullable();
            $table->decimal('average_rating', 4, 2)->default(0.00)->index();
            $table->unsignedBigInteger('ratings_count')->default(0)->index();
            $table->text('description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
