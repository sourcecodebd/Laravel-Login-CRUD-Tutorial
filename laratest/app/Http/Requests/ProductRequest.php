<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
                'product_name' => 'required|unique:Products|min:3|bail',
                'product_price' => 'required|min:2',
                'product_quantity' => 'required|min:2',
            ];
    }

    public function messages()
    {
        return [
            'product_name.required' => "Product name can't be empty...",
            'product_price.required' => "Product price can't be empty...",
            'product_quantity.required' => "Product quantity can't be empty...",

            'product_name.min' => "Product name must be minimum 3 characters...",
            'product_price.min' => "Product price must be minimum 2 characters...",
            'product_quantity.min' => "No. of product must be minimum 2 characters...",

        ];
    }
}
