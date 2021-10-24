<?php
/** @noinspection All */

namespace Nima\Crud_Api\App\Models;

use DateTimeInterface;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable {
    use HasFactory , Notifiable;
    
//    protected $table = "users";
//    protected $timestamp = true;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name' ,
        'email' ,
        'password' ,
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password' ,
        'remember_token' ,
    ];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime' ,
    ];
    
    public function posts () {
        return $this->hasMany (Post::class);
    }
    
    public function comments() {
      return $this->hasMany (Comments::class);
    }
    
    
    protected function serializeDate (DateTimeInterface $date) {
        return $date->format ("Y-m-d H:i:s") ;
    }
}
