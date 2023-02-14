<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreCtegory extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'Name_ar' => 'required|unique:categories,name->ar,'.$this->id,
            'Name_en' => 'required|unique:categories,name->en,'.$this->id,

        ];
    }

    public function messages()
    {
        return [

            'Name.required' => trans('validation.required'),
            'Name.unique' => trans('validation.unique'),
            'Name_en.required' => trans('validation.required'),
            'Name_en.unique' => trans('validation.unique'),
        ];
    }

}
