<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MailReplay extends Model
{
    //


    protected $fillable=['massage_id', 'text',];

    protected $table='mails_replays';

    public function message()
    {
        return $this->belongsTo(Mail::class, 'massage_id', 'id');
    }



}
