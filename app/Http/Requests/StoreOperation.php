<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOperation extends FormRequest
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

            'Name_ar' => 'required|unique:Task,name->ar,'.$this->id,
            'Name_en' => 'required|unique:Task,name->en,'.$this->id,
            'Room_id' => 'required',
            'Doctors_id' => 'required',
            'Patient_id' => 'required',
            'date' => 'required|date|date_format:Y-m-d',
            'Status_id'=> 'required',
            'dure'=> 'required',

        ];
    }

    public function messages()
    {
        return [


            'dure.required' => trans('validation.required'),
            'Status_id.required' => trans('validation.required'),
            'Name_ar.required' => trans('validation.required'),
            'Name_en.required' => trans('validation.required'),
            'Room_id.required' => trans('validation.required'),
            'Doctors_id.required' => trans('validation.required'),
            'date.required' => trans('validation.required'),
            'Patient_id.required' => trans('validation.required'),

        ];
    }
}
