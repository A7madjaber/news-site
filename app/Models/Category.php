<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'name'
    ];

    public function news(){
        return $this->belongsToMany(News::class,'categorynews');
    }


    use Sluggable;


    public function sluggable()
    {
        return [
            'slug' => [

                'source' => 'name',
                'onUpdate' => true

            ]
        ];
    }


}
