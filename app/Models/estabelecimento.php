<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class estabelecimento extends Model
{
    protected $primaryKey = 'id';

    protected $table = "estabelecimento";
    protected $fillable = ['name'];

    public function cliente(){
        return $this->hasMany('App\cliente', 'id_cliente', 'id');
    }
}

?>