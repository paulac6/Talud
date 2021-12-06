<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntradaM extends Model
{
    use HasFactory;

    protected $table='entrada_material';

    public function material(){
        return $this->belongsTo(Material::class);
    }
    public function entrada(){
        return $this->belongsTo(Entrad::class);
    }
    protected $guarded = [];
}