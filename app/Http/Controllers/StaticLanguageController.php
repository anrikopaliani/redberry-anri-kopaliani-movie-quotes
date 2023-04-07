<?php

namespace App\Http\Controllers;

class StaticLanguageController extends Controller
{
	public function store($locale)
	{
		app()->setLocale($locale);
		session()->put('locale', $locale);
		return back();
	}
}
