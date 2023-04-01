<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoginRequest;

class LoginController extends Controller
{
	public function index()
	{
		return view('login.login');
	}

	public function store(StoreLoginRequest $request)
	{
		// retrieve data
		$validated = $request->validated();

		if (auth()->attempt($validated))
		{
			return redirect('/');
		}

		// if auth failed
		return back();
	}
}
