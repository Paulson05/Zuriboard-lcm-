<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
   protected $table = 'team';
   protected $guarded  = [];

   public function join(){
      return $this->morphMany(Jointeam::class, 'jointeam' );
   }
}
