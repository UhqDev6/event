<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Addpelatihan extends Model
{

    protected $table = 'pelatihan';


    protected $fillable = [
        'title', 'caption','htm','image',
    ];

    protected $hidden = [
        'password','remember_token',
    ];
}
