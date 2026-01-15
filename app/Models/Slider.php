<?php

namespace App\Models;
use Illuminate\Support\Facades\Storage;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model{ 
    protected $fillable = [
        'name',
        'image',
        'text'
    ];

}
