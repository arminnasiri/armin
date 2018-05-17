<?php

namespace App\Modules\News;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comments extends Model 
{
   protected $guarded=[];
    protected $table = 'news_comments';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function news()
    {
        return $this->hasOne(News::class, 'news_id');
    }

}