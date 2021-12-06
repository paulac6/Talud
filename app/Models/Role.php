<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function usuarios(){
        //1 A MUCHOS
        return $this->hasMany(Usuario::class);
    }
    protected $guarded = [];
}