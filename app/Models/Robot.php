<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Robot extends Model
{
    use HasFactory;

    /*protected $fillable = ['nombre', 'descripcion', 'tipo', 'juego_id'];*/

    /*protected $guarded = [];*/

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function juego(){
        return $this->belongsTo('App\Models\Juego');
    }
}
