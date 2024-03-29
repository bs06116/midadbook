<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // use HasFactory;
    protected $fillable = ['message', 'sender_id', 'receiver_id'];

    /**
     * A message belong to a user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo(User::class, 'sender_id');
        
    }

    public function scopeUnread($query){
        return $query->whereNull('read_at');
        
    }
}
