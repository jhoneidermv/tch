<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Desicion extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nivel', 'numero', 'juego_id', 'nombre',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function juego(){
        return $this->belongsTo('App\Juego');
    }
}
