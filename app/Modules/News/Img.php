<?php

namespace App\Modules\News;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Img extends Model 
{

    protected $table = 'news_img';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function news()
    {
        return $this->hasOne(News::class);
    }

}