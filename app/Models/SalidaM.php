<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalidaM extends Model
{
    use HasFactory;

    protected $table='salida_material';

    public function material(){
        return $this->belongsTo(Material::class);
    }
    public function salida(){
        return $this->belongsTo(Salid::class);
    }
    protected $guarded = [];
}