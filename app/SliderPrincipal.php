<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SliderPrincipal extends Model
{
    protected $fillable = [
        'titulo',
        'imagen',
        'aux',
    ];
}
