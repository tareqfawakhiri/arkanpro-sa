<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;

class Pricing extends Model
{
    use Translatable, Resizable;

    protected $translatable = ['title'];

    protected $table = 'pricing';


}
