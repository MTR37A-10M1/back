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

    public function equipo()
    {
        return $this->belongsTo('App\Http\Models\Equipo','idEquipo','id');
    }

    public function estado()
    {
        return $this->belongsTo('App\Http\Models\Estado','idEstado','id');
    }
    
}