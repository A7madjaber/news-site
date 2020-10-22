<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RolesRequest extends FormRequest
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
            'permissions' => 'required | array | min:1',

        ];
    }


    public function messages()
    {

        return [
            'name.required' => 'ادخل اسم لمجموعة الصلاحيات',
            'permissions.required'=>'اختر صلاحيات للمجموعة'


        ];
    }

}
