<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;
    protected $guarded = [];

    //Relacion uno a muchos de Cargo con empleado
    public function employees(){
        return $this->hasMany(Employee::class);
    }
}
