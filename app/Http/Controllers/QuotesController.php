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
		$validated['image'] = $request->file('image')->store('images');

		Quote::create([
			'quote'    => $validated['quote'],
			'image'    => $validated['image'],
			'movie_id' => $validated['movie_id'],
		]);

		return redirect('/');
	}
}
