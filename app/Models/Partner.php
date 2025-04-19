<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Partner extends Model
{
    use Resizable;
    protected $table = 'partner';
}
