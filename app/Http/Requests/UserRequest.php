<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [

            'Name' => 'required',
            'phone' => 'numeric|min:10'



        ];
    }

    public function messages()
    {
        return [
            'Name.required' => trans('validation.required'),
            'phone.numeric' => trans('validation.numeric'),
            'phone.min' => trans('validation.min'),


        ];
    }
}

