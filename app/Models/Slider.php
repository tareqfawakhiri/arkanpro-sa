<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;


class Slider extends Model
{
    use Translatable, Resizable;

    protected $table = 'slider';
    protected $translatable = ['title', 'body', 'sub_title'];
}
