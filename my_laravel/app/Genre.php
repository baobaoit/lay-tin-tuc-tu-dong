<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        'name',
        'rss_url',
        'news_pages_id'
    ];

    public function news_page()
    {
        return $this->belongsTo('App\news_pages','news_pages_id');
    }
}
