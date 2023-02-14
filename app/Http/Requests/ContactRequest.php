<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'email' => 'required|Email|max:30',

            'name' => 'required|max:30',

            'phone' => 'numeric|min:10|max:20',

            'msg' => 'required|max:500|min:5',

        ];
    }

    public function messages()
    {
        return [
            'phone.required' => trans('validation.required'),
            'phone.max' => trans('validation.max'),
            'phone.min' => trans('validation.min'),
            'phone.numeric' => trans('validation.numeric'),
            'email.required' => trans('validation.required'),
            'email.email' => trans('validation.email'),
            'email.max' => trans('validation.max'),
            'name.required' => trans('validation.required'),
            'name.max' => trans('validation.max'),
            'msg.required' => trans('validation.required'),
            'msg.max' => trans('validation.max'),
            'msg.min' => trans('validation.min'),

        ];
    }
}
