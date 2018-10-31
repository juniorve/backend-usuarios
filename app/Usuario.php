<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    // protected $table = 'usuario';
    protected $fillable=[
        'id_usuario',
        'user_name',
        'pass'
    ];   
    
    protected $table = 'usuario';
    public $timestamps=false;
    protected $primaryKey = 'id_usuario';
}
