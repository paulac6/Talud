<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salid extends Model
{
    use HasFactory;

    protected $table='salida';

    public function obra(){
        //1 A MUCHOS
        return $this->belongsTo(Obra::class);
    }
    public function salida(){
        //1 A MUCHOS
        return $this->hasMany(SalidaM::class);
    }
    protected $guarded = [];
}