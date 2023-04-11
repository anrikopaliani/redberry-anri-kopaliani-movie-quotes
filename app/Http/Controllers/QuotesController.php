<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuoteRequest;
use App\Http\Requests\StoreUpdateQuoteRequest;
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

	public function destroy(Quote $quote)
	{
		$quote->delete();

		return back();
	}

	public function edit(Quote $quote)
	{
		return view('quotes.edit', [
			'quote' => $quote,
		]);
	}

	public function update(StoreUpdateQuoteRequest $request, Quote $quote)
	{
		$attributes = $request->validated();

		if (isset($attributes['image']))
		{
			$attributes['image'] = $request->file('image')->store('images');
		}

		$quote->update($attributes);

		return redirect("/movies/$quote->movie_id");
	}
}
