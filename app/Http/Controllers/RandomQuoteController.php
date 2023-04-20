<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\View\View;

class RandomQuoteController extends Controller
{
	public function index(): View
	{
		$data = Quote::inRandomOrder()->first();
		return view('quotes.index', [
			'quote' => $data,
		]);
	}
}
