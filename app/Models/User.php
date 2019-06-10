<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Activitylog\Traits\CausesActivity;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles, CausesActivity, LogsActivity;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'avatar_url',
        'password',
        'api_token',
    ];
    
    protected static $logName = 'user';
    protected static $logFillable = true;
//    protected static $logOnlyDirty = true;
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    protected $dates = [
        'created_at', 'updated_at'
    ];
    
    
    public function avatar()
    {
        return $this->avatar_url ?? $url = 'https://www.gravatar.com/avatar/'.md5( strtolower( trim( $this->email ) ) )."?s=300&d=mm&r=g";
    }
}
