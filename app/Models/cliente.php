<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class cliente extends Model
{
    protected $primaryKey = 'id';

    protected $table = "cliente";
    protected $fillable = ['name'];

    public function clientes(){
        return $this->belongsToMany('App\Models\estabelecimento', 'cliente_estabelecimento', 'id_estabelecimento'); 
    }
}

?>