<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\cliente;

class estabelecimento extends Model
{
    protected $primaryKey = 'id';

    protected $table = "estabelecimento";
    protected $fillable = ['name'];
    

    public function clientes(){
        return $this->belongsToMany('App\Models\cliente', 'cliente_estabelecimento', 'id_clientes'); 
    }
}

?>