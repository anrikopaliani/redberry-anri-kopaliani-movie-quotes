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
		$movies = Movie::all();

		$validated = $request->validated();
		$validated['user_id'] = auth()->user()->id;

		$errorMessagesKA = app()->getLocale() === 'en' ? 'Title[ka] already exists' : 'სათაური[ქართ] უკვე არსებობს';
		$errorMessagesEN = app()->getLocale() === 'en' ? 'Title[en] already exists' : 'სათაური[ინგ] უკვე არსებობს';

		foreach ($movies as $movie)
		{
			$en = $movie->getTranslation('title', 'en');
			$ka = $movie->getTranslation('title', 'ka');

			$requestKA = $validated['title']['ka'];
			$requestEN = $validated['title']['en'];

			if ($en === $requestEN && $ka == $requestKA)
			{
				return back()->withErrors([
					'title.ka' => $errorMessagesKA,
					'title.en' => $errorMessagesEN,
				]);
			}
			elseif ($en === $requestEN && $ka !== $requestKA)
			{
				return back()->withErrors([
					'title.en' => $errorMessagesEN,
				]);
			}
			elseif ($en !== $requestEN && $ka === $requestKA)
			{
				return back()->withErrors([
					'title.ka' => $errorMessagesKA,
				]);
			}

			Movie::create($validated);

			return redirect('/');
		}
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
