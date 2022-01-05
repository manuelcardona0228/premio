<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'departamento_id',
        'ciudad_id',
        'celular',
        'email',
        'habeas_data',
    ];

    public function departamento_id(){
        return $this->belongsTo(Departamento::class, 'departamento_id');
    }

    public function ciudad_id(){
        return $this->belongsTo(Ciudad::class, 'ciudad_id');
    }
}
