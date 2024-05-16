<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $fillable =['Marca', 'Modelo', 'Numero_serie'];
    public $timestamps =false;

    public function marcas(){
        return $this->belongsToMany(Marca::class);
    }
}
