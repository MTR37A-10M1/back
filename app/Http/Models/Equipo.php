<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    //
    protected $table = 'equipo';

    public $timestamps = false;

    protected $fillable = [
        'nombre', 'url'
    ];
}