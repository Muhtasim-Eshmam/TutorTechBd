<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class scam extends Model
{
    protected $fillable = [
        'name', 'address', 'phone','details',
    ];

}
