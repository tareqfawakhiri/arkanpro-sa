<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;


class Slider extends Model
{
    use Translatable, Resizable;

    protected $table = 'slider';
    protected $translatable = ['title', 'body', 'sub_title'];

    protected $appends = ['file_media_path_original'];

    function getFileMediaPathOriginalAttribute()
    {
        $media = json_decode($this->media);
        $media = $media[0] ?? null;
        return $media->download_link ?? null;
    }
}
