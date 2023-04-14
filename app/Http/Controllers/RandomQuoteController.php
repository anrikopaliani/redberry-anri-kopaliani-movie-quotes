<?php

namespace App\Http\Controllers;

use App\Models\Quote;

class RandomQuoteController extends Controller
{
	public function index()
	{
		$data = Quote::inRandomOrder()->first();
		return view('quotes.index', [
			'quote' => $data,
		]);
	}
}
