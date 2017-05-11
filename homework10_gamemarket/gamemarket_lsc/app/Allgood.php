<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allgood extends Model
{
  public function category()
  {
       return $this->belongsTo('Category');
  }

}
