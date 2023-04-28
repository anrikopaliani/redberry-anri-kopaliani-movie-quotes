<?php

namespace App\Http\Requests\Movies;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
	 */
	public function rules(): array
	{
		return [
			'title.en' => 'required|regex:/[a-zA-Z0-9]/',
			'title.ka' => 'required|regex:/[ა-ჰ0-9]/',
		];
	}
}
