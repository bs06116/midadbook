<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, HasRoles, LogsActivity, ThrottlesLogins;
    //protected static $ignoreChangedAttributes = ['password'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','username', 'password', 'phone_number', 'city_id', 'twitter_link','goread_link', 'profile_photo'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected static $logFillable = true;
    protected static $logName = 'user';
    protected static $logOnlyDirty = true;
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setStatusAttribute($status)
    {
        $this->attributes['status'] = ($status)? 1 : 0;
    }
    // public function setPasswordAttribute($password)
    // {
    //     if(Hash::needsRehash($password)){
    //         $password = Hash::make($password);
    //         $this->attributes['password'] = $password;
    //     }
    // }
    public function categories()
    {
        return $this->hasMany('App\Category');
    }
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    public function like()
    {
        return $this->hasMany('App\Like','user_id','id');
    }
    public function city() {
        return $this->belongsTo(City::class);
    }


    /**
     * A user can have many messages
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages(){
        return $this->hasMany(Message::class, 'sender_id');
        
    }
    
    public function receive_messages(){
        return $this->hasMany(Message::class, 'receiver_id');
        
    }

    private function get_brightness($hex) { 
        // returns brightness value from 0 to 255 
        // strip off any leading # 
        $hex = str_replace('#', '', $hex); 
        $c_r = hexdec(substr($hex, 0, 2)); 
        $c_g = hexdec(substr($hex, 2, 2)); 
        $c_b = hexdec(substr($hex, 4, 2)); 
        
        return (($c_r * 299) + ($c_g * 587) + ($c_b * 114)) / 1000;
    }
    
    public function getUserImageUrl($avatar = null)
    {
        if(empty($avatar)) {
            $bg_color = $this->avtar_bg;;

            if ($this->get_brightness($bg_color) > 130) { // will have to experiment with this number 
                $textColor = '000000';
            } else {  
                $textColor = 'FFFFFF';
            }  
            
            return 'https://dummyimage.com/80x80/' . $bg_color . '/' . $textColor . '?text=' . substr($this->name, 0, 1);
        }else{
            Log::info('Avatar Available');
            return $avatar;
        }
    }
}
