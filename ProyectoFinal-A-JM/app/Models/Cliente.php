<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table ='cliente';

    public function prestamos1(){
        return $this -> hasMany(Prestamo::class,'id');
    }
}
