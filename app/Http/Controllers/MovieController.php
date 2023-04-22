<?php

namespace App\Http\Controllers;

use App\Http\Requests\Movies\StoreMovieRequest;
use App\Http\Requests\Movies\UpdateRequest;
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

	public function edit(Movie $movie): View
	{
		return view('movies.edit', [
			'movie' => $movie,
		]);
	}

	public function update(UpdateRequest $request, Movie $movie): RedirectResponse
	{
		$attributes = $request->validated();

		$movie->update($attributes);

		return redirect()->route('dashboard');
	}

	public function destroy(Movie $movie): RedirectResponse
	{
		$movie->delete();

		return back();
	}
}
