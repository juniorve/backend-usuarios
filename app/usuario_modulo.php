<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario_modulo extends Model
{
    protected $fillable=[
        'id_usuario','id_mod','estado_um'
    ];

   protected $table = 'usuario_modulo';
   public $timestamps = false; 
   protected  $primaryKey  = 'id_usuario';

}
