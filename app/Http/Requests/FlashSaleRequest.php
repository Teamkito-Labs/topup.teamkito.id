<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlashSaleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'diskon' => ['required', 'numeric'],
            'potongan' => ['required', 'numeric'],
            'kuota' => ['required', 'numeric'],
            'batas_waktu' => ['required', 'numeric'],
			'thumbnail' => ['nullable', 'image', 'mimes:png,jpg,jpeg'],
        ];
    }
}
