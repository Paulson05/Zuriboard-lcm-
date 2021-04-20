<?php

namespace App\Models;
use Auth;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthContract;
use Illuminate\Notifications\Notifiable;

class Users extends Model implements AuthContract
{
    use HasFactory, Notifiable;
    use Authenticatable;
    protected $table = 'users';
    protected $guarded = [];
    protected  $hidden =  ['remember_token'];


    public function getName(){
        if($this->first_name && $this->last_name){
            return "{$this->first_name} {$this->last_name}";
        }

        if($this->first_name){
            return $this->first_name;
        }

        return null;
    }

    public function getNameOrUsername(){
        return $this->getName() ?: $this->username;
    }

    public function getFirstNameOrUsername(){
        return $this->first_name ?: $this->username;
    }
     public function userprofile(){
         return $this->hasOne(Userprofile::class);
     }
        public function hasjoined(){
                   return $this->hasMany(Teams::class, 'users_id');
        }

     public function join(Teams $teams){
               return(bool) $teams->join
               ->where('team_id', $teams->id)
               ->where('team_type', get_class($teams))
               ->where('users_id', $this->id)
               ->count();
     }
}

