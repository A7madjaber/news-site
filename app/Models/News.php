<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    use Sluggable;

    protected $fillable = [
        'title', 'description', 'category_id', 'image','details','tags','slug'
    ];




    public function category(){
        return $this->belongsToMany(Category::class,'categorynews');
    }



    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true

            ]
        ];
    }


    public function scopeWhereCategoryIn($query , $category){


        return $query->whereHas('category',function($q) use($category){
            return $q->where('categories.name',"=",$category);


        })->get();

    }
}
