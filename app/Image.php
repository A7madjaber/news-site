<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    protected $appends=['name'];
    protected $hidden=['mime_type','size','created_at','updated_at','pivot','deleted_at'];



    public function getFileNameAttribute($image)
    {
        return image_url($image);
    }

    public function getNameAttribute()
    {
        return $this->getOriginal('file_name');
    }

    public static $rules = [
        'image' => 'required|mimes:png,gif,jpeg,jpg,bmp,svg,ico,mp4'
    ];

    public static $messages = [
        'image.mimes' => 'الملف الذي تحاول رفعه له صيغة غير مدعومة',
        'image.required' => 'الصورة مطلوبة'
    ];
}
