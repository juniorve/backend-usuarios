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
<<<<<<< HEAD
        'pass',
        'estado'
=======
        'pass'
>>>>>>> 0187267e9285e28751c8ec69e63276ed19aa2533
    ];   
    
    protected $table = 'usuario';
    public $timestamps=false;
    protected $primaryKey = 'id_usuario';
}
