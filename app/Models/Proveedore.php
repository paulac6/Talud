<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedore extends Model
{
    use HasFactory;

    public function materiales(){
        //1 A MUCHOS
        return $this->hasMany(Material::class);
    }
    public function entrada(){
        //1 A MUCHOS
        return $this->hasMany(Entrad::class);
    }
    protected $guarded = [];
}