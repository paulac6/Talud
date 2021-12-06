<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    //MUCHOS A 1
    public function tipo(){
        return $this->belongsTo(Tipo::class);
    }
    public function marca(){
        return $this->belongsTo(Marca::class);
    }
    public function proveedor(){
        return $this->belongsTo(Proveedore::class);
    }
    public function entradam(){
        //1 A MUCHOS
        return $this->hasMany(EntradaM::class);
    }
    public function salidam(){
        //1 A MUCHOS
        return $this->hasMany(SalidaM::class);
    }
    protected $guarded = [];
}