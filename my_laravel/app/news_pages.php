<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news_pages extends Model
{
    protected $fillable = [
        'name_page',
        'rss_url',
        'pre_pattern',
        'genre'
    ];

    public function genres()
    {
        return $this->hasMany('App\Genre','news_pages_id');
    }
}
