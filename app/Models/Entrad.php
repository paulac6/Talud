<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrad extends Model
{
    use HasFactory;

    protected $table='entrada';

    public function proveedor(){
        return $this->belongsTo(Proveedore::class);
    }
    public function entrada(){
        //1 A MUCHOS
        return $this->hasMany(EntradaM::class);
    }
    protected $guarded = [];
}