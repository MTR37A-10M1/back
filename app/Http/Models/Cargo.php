<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    //
    protected $table = 'cargo';

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];
}