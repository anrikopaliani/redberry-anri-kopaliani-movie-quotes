<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Models\Movie;

class MovieController extends Controller
{
	public function index()
	{
		return view('add-movie-form.movie-form');
	}

	public function store(StoreMovieRequest $request)
	{
		$validated = $request->validated();
		$validated['user_id'] = auth()->user()->id;
		Movie::create($validated);

		return redirect('/');
	}
}
