<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $fillable = [
       'class','subject','bookname','syllabus','school',
    ];
}