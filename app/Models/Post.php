<?php

namespace App\Models;

use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;

class Post extends \TCG\Voyager\Models\Post
{
    use Translatable, Resizable;

    protected $translatable = ['title', 'body']; // fields that are translatable

    protected $appends = [
        'getDateTime'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function getGetDateTimeAttribute()
    {
        return ($this->created_at)->translatedFormat('d') . '<br/><span>' . ($this->created_at)->translatedFormat('F') . '</span>';
    }
}
