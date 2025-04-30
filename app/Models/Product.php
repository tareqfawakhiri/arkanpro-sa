<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;

class Product extends Model
{

    use Translatable, Resizable;

    protected $translatable = ['title', 'description', 'excerpt', 'slug'];

    protected $table = 'products';
    protected $guarded = [];

    protected $appends = ['file_media_path_original', 'short_content'];

    function getFileMediaPathOriginalAttribute()
    {
        $media = json_decode($this->media_banner);
        $media = $media[0] ?? null;
        return $media->download_link ?? null;
    }

    public function getShortContentAttribute()
    {
        return Str::of(strip_tags($this->description))->substr(0, 300);
    }


}
