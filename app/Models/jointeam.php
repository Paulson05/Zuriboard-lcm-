<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jointeam extends Model
{
    // use HasFactory;
    protected $table = 'jointeam';
    protected $guarded  = [];
 
    
    public function JoinTeam(){
        return $this->morphTo();
   }
}
