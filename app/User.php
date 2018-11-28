<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password','employeeid','firstname','middlename','lastname','contact','address','gender','designation','user_type','status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function books()
  {
    return $this->hasMany('App\Model\Book','addedby');
  }
     public function guidelines()
  {
    return $this->hasMany('App\Model\Guideline','addedby');
  }
  public function reports()
  {
    return $this->hasMany('App\Model\Report','addedby');
  }
}
