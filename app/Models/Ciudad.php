<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    protected $table = 'ciudades';

    protected $fillable = [
        'nombre', 'departamento_id'
    ];

    public static function ciudades($id)
    {
        return Ciudad::where('departamento_id', $id)->get();
    }

    public function cliente(){
        return $this->hasOne(Cliente::class);
    }
}
