<?php

namespace App\Models;
use App\Models\Jointeams;
use App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
   protected $table = 'team';
   protected $guarded  = [];

   public function join(){
      return $this->morphMany(Jointeams::class, 'team' );
   }

   public function users(){
      return $this->belongsToMany( Users::class,'jointeam','team_id','users_id');
   }

   
}
