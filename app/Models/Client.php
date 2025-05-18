<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Client extends Model
{
    use Resizable;

    protected $table = 'clients';
}
