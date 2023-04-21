<?php

namespace App\Http\Controllers;

use App\Http\Requests\Quotes\StoreQuoteRequest;
use App\Http\Requests\Quotes\UpdateRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class QuotesController extends Controller
{
	public function index(): View
	{
		$movies = Movie::all();

		return view('quotes.quotes-form', [
			'movies' => $movies,
		]);
	}

	public function store(StoreQuoteRequest $request): RedirectResponse
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

	public function destroy(Quote $quote): RedirectResponse
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

	public function update(UpdateRequest $request, Quote $quote): RedirectResponse
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
