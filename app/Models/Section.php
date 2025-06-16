<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;

class Section extends Model
{

    use Translatable, Resizable;

    protected $translatable = ['title', 'body', 'excerpt'];

    protected $table = 'sections';


}
