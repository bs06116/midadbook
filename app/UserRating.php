<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRating extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'rating_by_user',
        'rating',
        'comment',
    ];

    public function ratingBy() {
        return $this->belongsTo(User::class,'id','rating_by_user');
    }
}
