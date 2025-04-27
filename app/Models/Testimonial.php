<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;


class Testimonial extends Model
{
    use Translatable, Resizable;

    protected $translatable = ['name', 'description', 'job'];

    protected $table = 'testimonial';
}
