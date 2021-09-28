<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Post extends Model
{
    use LogsActivity;
    protected $fillable = [
        'post_title',
        'post_body',
        'book_type',
        'featured_image',
        'image_second',
        'status',
        'category_id',
        'user_id',
        'country_id',
        'city_id',
    ];
    protected static $logFillable = true;
    protected static $logName = 'post';
    protected static $logOnlyDirty = true;
    public function setStatusAttribute($status)
    {
        $this->attributes['status'] = ($status)? 1 : 0;
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function like()
    {
        return $this->hasMany('App\Like','post_id','id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment','post_id','id');
    }
}
