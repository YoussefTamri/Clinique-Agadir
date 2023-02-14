<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInvoice extends FormRequest
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

            'price' => 'required',
            'Doctors_id' => 'required',
            'Patient_id' => 'required',
            'date' => 'required|date|date_format:Y-m-d',
            'payment_id'=> 'required',


            'Operations_id'=> 'required',

        ];
    }

    public function messages()
    {
        return [



            'payment_id.required' => trans('validation.required'),
            'price.required' => trans('validation.required'),
            'Doctors_id.required' => trans('validation.required'),
            'date.required' => trans('validation.required'),
            'Patient_id.required' => trans('validation.required'),
            'Operations_id.required' => trans('validation.required'),

        ];
    }
}
