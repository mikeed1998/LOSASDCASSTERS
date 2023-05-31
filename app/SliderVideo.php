<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SliderVideo extends Model
{
    protected $fillable = [
        'link',
        'archivo',
        'aux',
        'tipo',
    ];
}
