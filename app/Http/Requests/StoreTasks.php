<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTasks extends FormRequest
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
            'Status_id' => 'required',
            'Doctors_id' => 'required',
            'date' => 'required|date|date_format:Y-m-d',
            'details' => 'required',

        ];
    }

    public function messages()
    {
        return [



            'Name_ar.required' => trans('validation.required'),
            'Name_en.required' => trans('validation.required'),
            'Status_id.required' => trans('validation.required'),
            'Doctors_id.required' => trans('validation.required'),
            'date.required' => trans('validation.required'),
            'details.required' => trans('validation.required'),

        ];
    }
}
