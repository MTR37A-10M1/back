<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Falla extends Model
{
    //
    protected $table = 'fallas';

    public $timestamps = false;

    protected $fillable = [
        'descripcion', 'idEquipo', 'idEstado'
    ];
    
}