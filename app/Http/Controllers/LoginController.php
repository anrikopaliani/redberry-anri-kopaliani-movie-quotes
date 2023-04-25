<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LoginController extends Controller
{
	public function index(): View
	{
		return view('login.login');
	}

	public function store(StoreLoginRequest $request): RedirectResponse
	{
		// retrieve data
		$validated = $request->validated();

		if (auth()->attempt($validated))
		{
			return redirect('/');
		}

		// if auth failed
		return back()->withErrors(['password' => __('messages.Incorrect Password')])->withInput(['username' => $validated['username']]);
	}

	public function destroy(): RedirectResponse
	{
		auth()->logout();

		return redirect('/');
	}
}
