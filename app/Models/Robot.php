<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Robot extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'tipo'];

    //protected $guarded = [];//

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
