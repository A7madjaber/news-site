<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use Sluggable;


    protected $fillable=[

      'name','Content'
    ];

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
