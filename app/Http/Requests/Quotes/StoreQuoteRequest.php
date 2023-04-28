<?php

namespace App\Http\Requests\Quotes;

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
			'quote.en'         => 'required|regex:/[a-zA-Z0-9]/',
			'quote.ka'         => 'required|regex:/[ა-ჰ0-9]/',
			'movie_id'         => 'required',
			'image'            => 'required|image',
		];
	}
}
