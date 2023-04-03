<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;

class QuotesController extends Controller
{
	public function index()
	{
		$movies = Movie::all();

		return view('quotes.quotes-form', [
			'movies' => $movies,
		]);
	}

	public function store(StoreQuoteRequest $request)
	{
		$validated = $request->validated();
		// WORK IN PROGRESS
		Quote::create([
			'quote' => [
				'en' => $validated['quote_en'],
				'ka' => $validated['quote_ka'],
			],
			'image'    => $validated['image'],
			'movie_id' => $validated['movie_id'],
		]);
	}
}
