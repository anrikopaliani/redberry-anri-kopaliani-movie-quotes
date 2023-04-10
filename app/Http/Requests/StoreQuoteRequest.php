<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuoteRequest extends FormRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
	 */
	public function rules(): array
	{
		return [
			'quote.en'         => 'required',
			'quote.ka'         => 'required',
			'movie_id'         => 'required',
			'image'            => 'required|image',
		];
	}

	// public function messages()
	// {
	// 	return [
	// 		'quote.en.required' => 'The Quote[en] is required',
	// 		'quote.ka.required' => 'The Quote[ka] is required',
	// 	];
	// }
}
