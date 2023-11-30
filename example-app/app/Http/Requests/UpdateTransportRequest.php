<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTransportRequest extends FormRequest
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
            'car_model_id' => 'required|numeric|between:1,9',
            'car_number' => 'required|max:20',
            'fuel_tank_capacity' => 'required',
            'average_fuel_consumption' => 'required',
            'projected_distance' => 'required',
        ];
    }
}
