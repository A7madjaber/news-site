<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'title' => 'required|max:200',
            'description' => 'required|min:10',
            'details' => 'required|min:50',
            'tags' => 'required',
            'image' => 'required',
            'categoryid'=>'required'


        ];
    }


    public function messages()
    {

        return [
            'title.required' => 'ادخل عنوان للخبر',
            'title.max' => 'عنوان الخبر طويل جدا',
            'description.required' => 'ادخل وصف للخبر',
            'description.min' => 'الوصف صغير جدا',
            'tags.required' => 'ادخل كلامات دلالية',
            'details.required' => 'ادخل تفاصيل الخبر',
            'details.min' => 'تفاصيل الخبر صغيرة جدا',
            'image.required' => 'اختر صورة',
            'categoryid.required' => 'اختر تصنيف',


        ];
    }

}
