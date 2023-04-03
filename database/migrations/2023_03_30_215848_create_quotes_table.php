<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('quotes', function (Blueprint $table) {
			$table->id();
			$table->json('quote');
			$table->string('image');
			$table->foreignId('movie_id')->references('id')->on('movies');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('quotes');
	}
};
