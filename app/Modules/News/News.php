<?php

namespace App\Modules\News;

use App\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model 
{
    protected $guarded=[];
    protected $table = 'news_table';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->hasMany(User::class, 'reporter_id');
    }

    public function comment()
    {
        return $this->hasMany(Comments::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category ()
    {
        return $this->hasOne (Category::class);
    }

}