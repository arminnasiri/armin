<?php

namespace App;

use App\Modules\News\News;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded=[];
    protected $table = 'category_news';
    public function news ()
    {
        return $this->hasMany (News::class);
    }
}
