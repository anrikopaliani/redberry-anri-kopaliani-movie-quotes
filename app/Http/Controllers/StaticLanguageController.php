<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class StaticLanguageController extends Controller
{
	public function store($locale): RedirectResponse
	{
		app()->setLocale($locale);
		session()->put('locale', $locale);
		return back();
	}
}
