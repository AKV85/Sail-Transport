<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTransportRequest extends FormRequest
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
            'manufacturer_name' => 'required|string',
            'car_model' => 'required|string',
            'car_model_id' => 'exists:car_models,id',
            'car_number' => 'required',
            'fuel_tank_capacity' => 'required',
            'average_fuel_consumption' => 'required',
            'projected_distance' => 'required',
        ];
    }
}
