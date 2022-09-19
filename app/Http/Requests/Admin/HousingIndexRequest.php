<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class HousingIndexRequest extends FormRequest
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
            'page' => ['required','integer','min:0'],
            'country_id' => ['exists:countries,id'],
            'category_id' => ['exists:categories,id'],
            'city_id' => ['exists:cities,id'],
            'max_adult_count' => ['integer'],
            'max_child_count' => ['integer'],
            'max_baby_count' => ['integer'],
            'max_ped_count' => ['integer'],
        ];
    }

    public function messages()
    {
        return [
        ];
    }

    public function failedValidation($validator)
    {
        throw new HttpResponseException(
            response()->json(['message' => $validator->errors()->first()], 400)
        );
    }
}
