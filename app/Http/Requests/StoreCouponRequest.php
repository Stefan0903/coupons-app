<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCouponRequest extends FormRequest
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
            'name' => 'required',
            'sale' => 'required',
            'image' => 'required',
            'number' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Unesite naziv kupona',
            'sale.required'  => 'Unesite popust na kupon',
            'image.required'  => 'Unesite sliku kupona',
            'number.required'  => 'Unesite broj dostupnih kupona',
        ];
    }
}
