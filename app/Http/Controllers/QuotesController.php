<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class QuotesController extends Controller
{
	public function index()
	{
		$movies = Movie::all();

		return view('quotes.quotes-form', [
			'movies' => $movies,
		]);
	}

	public function store()
	{
	}
}
