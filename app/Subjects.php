<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    protected $fillable = [
        'name','nim','kota_asal','tgl_lahir','nortu','aortu','postal','nohp','stat'
    ];
}
