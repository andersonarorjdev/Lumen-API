<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class admin extends Model
{
  public function admin(){
    return $this->belongsToMany('App\admin');
  }
}

?>