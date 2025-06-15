<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Quotation extends Model
{
    use Translatable;

    protected $translatable = [];

    protected $table = 'quotation';
    protected $guarded = [];
}
