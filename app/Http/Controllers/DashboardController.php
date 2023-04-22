<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;

class DashboardController extends Controller
{
	public function index()
	{
		$quotes = Quote::all();
		$movies = Movie::all();
		return view('dashboard.index', [
			'quotes' => $quotes,
			'movies' => $movies,
		]);
	}
}
