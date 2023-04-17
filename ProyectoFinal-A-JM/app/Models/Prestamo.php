<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;
    protected $table ='prestamo';
    protected $fillable = ['libro_id','cliente_id','costo'];

    public function libros1(){
        return $this -> belongsTo(Libro::class,'libro_id');
    }

    public function clientes(){
        return $this -> belongsTo(Cliente::class,'cliente_id');
    }
}
