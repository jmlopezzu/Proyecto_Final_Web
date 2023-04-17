<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proovedor extends Model
{
    use HasFactory;
    protected $table ='proovedor';

    public function libros(){
        return $this -> hasMany(Libro::class,'id');
    }
}
