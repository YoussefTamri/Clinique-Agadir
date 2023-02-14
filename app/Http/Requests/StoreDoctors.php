<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDoctors extends FormRequest
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
            'Email' => 'required|unique:doctors,Email,'.$this->id,
            'Password' => 'required',
            'Name_ar' => 'required',
            'Name_en' => 'required',
            'category_id' => 'required',
            'Gender_id' => 'required',
            'phone' =>'required',
            'From_date' => 'required|date|date_format:Y-m-d',
            'Address' => 'required',
            'Description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'phone.required' => trans('validation.required'),
            'Email.required' => trans('validation.required'),
            'Email.unique' => trans('validation.unique'),
            'Password.required' => trans('validation.required'),
            'Name_ar.required' => trans('validation.required'),
            'Name_en.required' => trans('validation.required'),
            'category_id.required' => trans('validation.required'),
            'Gender_id.required' => trans('validation.required'),
            'From_Date.required' => trans('validation.required'),
            'Address.required' => trans('validation.required'),
            'Description.required' => trans('validation.required'),
        ];
    }
}
