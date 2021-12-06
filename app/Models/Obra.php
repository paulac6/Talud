<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    use HasFactory;
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
    public function tipo(){
        return $this->belongsTo(Tipo::class);
    }
    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }
    public function salida(){
        return $this->hasMany(Salid::class);
    }
    protected $guarded = [];
}