<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded = []; //Asignacion masiva

    //Relacion uno a muchos inversa de Empleado con cargo
    public function position(){
        return $this->belongsTo(Position::class);
    }
}
