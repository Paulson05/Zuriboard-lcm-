<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracks extends Model
{
    protected $table = 'track';
    protected $guarded  = [];

    // public function posts(){
    //     return $this->hasMany(Post::class, 'track_id');
    // }
}
  
