<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class cliente extends Model
{
  public function cliente(){
    return $this->belongsToMany('App\cliente');
  }
}

?>