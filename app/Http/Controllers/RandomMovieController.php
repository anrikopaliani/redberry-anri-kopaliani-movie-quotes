<?php

namespace App\Http\Controllers;

use App\Models\Quote;

class RandomMovieController extends Controller
{
	public function index()
	{
		$data = Quote::all()->random();
		return view('movies.index', [
			'movie' => $data,
		]);
	}
}
