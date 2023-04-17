<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $table ='libro';
    protected $fillable = ['nombre','autor','genero','paginas','proovedor_id'];

    public function proovedores(){
        return $this -> belongsTo(Proovedor::class,'proovedor_id');
    }

    public function prestamos(){
        return $this -> hasMany(Prestamo::class,'id');
    }

}



