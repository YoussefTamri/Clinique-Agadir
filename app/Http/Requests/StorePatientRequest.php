<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePatientRequest extends FormRequest
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


    public function rules()
    {
        return [

            'Name_ar' => 'required',
            'Name_en' => 'required',
            'Doctors_id' => 'required',
            'Room_id' => 'required',
            'PatientStatus_id' => 'required',
            'Payments_id' => 'required',
            'date' => 'required|date|date_format:Y-m-d',

        ];
    }

    public function messages()
    {
        return [
            'Name_ar.required' => trans('validation.required'),
            'Name_en.required' => trans('validation.required'),
            'Doctors_id.required' => trans('validation.required'),
            'PatientStatus_id.required' => trans('validation.required'),
            'Doctors_id.required' => trans('validation.required'),
            'Payments_id.unique' => trans('validation.unique'),
            'date.required' => trans('validation.required'),
        ];
    }
}
