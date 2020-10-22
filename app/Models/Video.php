<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use Sluggable;


    protected $fillable =['name','url','image','views'];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name',
                'onUpdate'=>true

            ]
        ];
    }

}
