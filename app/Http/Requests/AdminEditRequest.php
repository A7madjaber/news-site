<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminEditRequest extends FormRequest
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
                'name' => 'required',
                'email' => 'required|email|unique:users,email,'.$this->id,
                'password' => 'required|confirmed',
                'role' => 'required',

        ];
    }


    public function messages()
    {

        return [
            'name.required' => 'ادخل اسم للمستخدم',
            'email.required' => 'ادخل بريد للمستخدم',
            'email.unique' => 'البريد مستخدم',
            'email.email' => 'ادخل بريد صحيح',
            'password.required' => 'ادخل كلمة مرور',
            'password.confirmed' => 'يجب ادخال كلمة مرور مطابقة',
            'role.required' => 'يجب اختيار نوع الصلاحيات',


        ];
    }
}
