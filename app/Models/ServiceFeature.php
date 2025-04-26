<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;


class ServiceFeature extends Model
{

    use Translatable, Resizable;

    protected $translatable = ['title', 'description'];

    protected $table = 'service_feature';
    protected $guarded = [];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function serviceId()
    {
        return $this->belongsTo(Service::class);
    }
}

