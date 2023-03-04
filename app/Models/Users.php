<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;


use App\Models\Rates;
use App\Models\Comments;
use App\Models\UserLastSeen;
use App\Models\MeetingTime;

class Users extends Model implements AuthenticatableContract, JWTSubject
{
    use Authenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function rates() {
        return $this->hasMany(Rates::class, 'user_id', 'id');
    }

    public function get_last_seen() {
        return $this->hasMany(UserLastSeen::class, 'user_id' , 'id');
    }
    public function get_meeting_time(){
        return $this->hasMany(MeetingTime::class, 'user_id' , 'id');
    }

   
}
