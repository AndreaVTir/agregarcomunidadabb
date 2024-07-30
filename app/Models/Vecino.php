<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vecino extends Model
{
    use HasFactory;

    protected $table = 'vecinos';
    
    protected $primaryKey = 'id_vecino';
    
    public $incrementing = false;
    
    protected $fillable = [
        'Nombre', 'Escalera', 'Piso', 'Puerta', 'id_comunidad',
    ];

    public function comunidad()
    {
        return $this->belongsTo(Comunidad::class, 'id_comunidad');
    }
}