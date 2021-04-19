<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jointeam extends Model
{
    // use HasFactory;
    protected $table = 'jointeam';
    protected $guarded  = [];
 
    
    public function jointeam(){
        return $this->morphTo();
   } 

   public function user(){
       return $this->belongsTo(Users::class, 'users_id');
   }
}
