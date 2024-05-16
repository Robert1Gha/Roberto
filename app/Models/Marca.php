<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $fillable =['Nombre_marca', 'Versiones_autos'];
    public $timestamps =false;

    public function carros(){
        return $this->belongsToMany(Carro::class);
    }
}
