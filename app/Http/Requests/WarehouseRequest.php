<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WarehouseRequest extends FormRequest
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
          'name' => 'required|string|max:255',
          'address' => 'required|string|max:255',
          'phone' => 'required|string|max:11',
          'city_id' => 'required|numeric',
          'price_warehousing' => 'numeric',
          'price_packing_basic' => 'numeric',
          'price_packing_ultra' => 'numeric',
          'price_packing_primum' => 'numeric',
        ];
    }
}
