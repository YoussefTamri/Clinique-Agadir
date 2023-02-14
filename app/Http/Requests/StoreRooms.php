<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRooms extends FormRequest
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

            'number' => 'required',
            'Doctors_id' => 'required',
            'Status_id' => 'required',
            'date' => 'required|date|date_format:Y-m-d',

        ];
    }

    public function messages()
    {
        return [
            'number.required' => trans('validation.required'),
            'Doctors_id.required' => trans('validation.required'),
            'Status_id.unique' => trans('validation.unique'),
            'date.required' => trans('validation.required'),
        ];
    }
}
