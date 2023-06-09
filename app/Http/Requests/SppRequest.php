<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SppRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tahun' => ['required', 'string', 'min:4', 'max:4', 'unique:spps'],
            'nominal' => ['required', 'numeric']
        ];
    }
}