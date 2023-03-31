<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoginRequest;

class LoginController extends Controller
{
	public function store(StoreLoginRequest $request)
	{
		// retrieve data
		$validated = $request->validated();

		return redirect('/');
	}
}
