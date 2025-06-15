<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;

class Partner extends Model
{
    use Resizable;
    use Translatable;

    protected $translatable = [];
    protected $table = 'partner';
}
