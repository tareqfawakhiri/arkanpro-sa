<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;


class Portfolio extends Model
{
    use Resizable, Translatable;

    protected $translatable = ['title', 'sub_title', 'description']; // fields that are translatable


}
