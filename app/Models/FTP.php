<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FTP extends Model
{
    protected $fillable =[
        'name',
        'link',
        'logo'
    ];
}
