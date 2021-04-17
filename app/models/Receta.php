<?php

namespace App\models;

use App\User;
use App\Models\CategoriaReceta;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    //campos que se agregaran 
    protected $fillable = [
        'titulo', 'preparacion', 'ingredientes', 'imagen', 'categoria_id'
    ];
    //obtiene la categoria de la receta via FK
    public function categoria(){
        return $this->belongsTo(CategoriaReceta::class);
    }


    //obtiene la informacion del usuario via FK
    public function autor(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
