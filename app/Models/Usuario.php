<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    
    public function rol(){
        return $this->belongsTo(Role::class);
    }
    public function obras(){
        //1 A MUCHOS
        return $this->hasMany(Obra::class);
    }
    protected $guarded = [];
}