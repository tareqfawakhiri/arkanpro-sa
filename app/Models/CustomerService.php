<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class CustomerService extends Model
{
    use Translatable;

    protected $translatable = [];

    protected $table = 'customer_service';
    protected $guarded = [];
}
