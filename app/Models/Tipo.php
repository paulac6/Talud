<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;

    public function materiales(){
        //1 A MUCHOS
        return $this->hasMany(Material::class);
    }
    public function obras(){
        //1 A MUCHOS
        return $this->hasMany(Obra::class);
    }
    public function salidam(){
        //1 A MUCHOS
        return $this->hasMany(SalidaM::class);
    }
    protected $guarded = [];
}