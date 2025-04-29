<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;

class PricingChecklist extends Model
{
    use Resizable;


    protected $table = 'pricing_checklist';

}
