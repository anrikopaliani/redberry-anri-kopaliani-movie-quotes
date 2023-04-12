<?php

namespace App\Http\Controllers;

use App\Models\Quote;

class RandomQuoteController extends Controller
{
	public function index()
	{
		$data = Quote::all()->random();
		return view('quotes.index', [
			'quote' => $data,
		]);
	}
}
