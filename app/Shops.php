<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shops extends Model
{
   public function user()
   {
       return $this->belongsTo('App\User');
   }
}
