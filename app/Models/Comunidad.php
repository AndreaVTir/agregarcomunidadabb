<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunidad extends Model
{
    use HasFactory;

    protected $table = 'comunidades'; 

    protected $primaryKey = 'id_comunidad'; 

    public $incrementing = false;

    protected $fillable = [
        'name',
        // otros campos...
    ];

    public function vecinos()
    {
        return $this->hasMany(Vecino::class, 'id_comunidad');
    }
}