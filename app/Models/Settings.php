<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable = [


        'title',
        'description',
        'tags',
        'CopyRight',
        'facebook',
        'twitter',
        'icon',
        'instagram',
        'youtube'

    ];
}
