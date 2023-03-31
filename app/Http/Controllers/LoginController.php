<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
	public function store()
	{
		// validate
		$attributes = request()->validate([
			'username' => 'required',
			'password' => 'required',
		]);

		if (auth()->attempt($attributes))
		{
			return redirect('/');
		}

		// auth failed
		return back();
	}
}
