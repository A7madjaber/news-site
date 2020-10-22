<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $fillable=[


        'email',
        'massage',
        'subject',
        'name',
        'read_id',



];

public function replays()
    {
        return $this->hasMany(MailReplay::class, 'massage_id', 'id');
    }


}


