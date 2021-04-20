<?php

namespace App\Models;
use App\Models\Jointeams;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
   protected $table = 'team';
   protected $guarded  = [];

   public function join(){
      return $this->morphMany(Jointeams::class, 'team' );
   }
}
