<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Models\Movie;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class MovieController extends Controller
{
	public function store(StoreMovieRequest $request): RedirectResponse
	{
		$validated = $request->validated();
		$validated['user_id'] = auth()->user()->id;

		Movie::create($validated);

		return redirect('/');
	}

	public function show(Movie $movie): View
	{
		$quotes = $movie->quotes;
		return view('quotes.quotes', [
			'title'  => $movie->getTranslation('title', app()->getLocale()),
			'quotes' => $quotes,
		]);
	}
}
