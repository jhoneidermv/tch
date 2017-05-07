<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Alimentos extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nombre', 'descripcion', 'numero_calorias',
    ];
}
