<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tuitions extends Model
{
    protected $fillable = [
        'code','bckgrnd','subject','school','class','salary','time','contact',
     ];
}
