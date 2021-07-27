<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tutor extends Model
{
    protected $fillable = [
        'name', 'address', 'phone','educate','contact','nid','code',
    ];
}
