<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inventario
 *
 * @property $id
 * @property $clasificador
 * @property $codigo
 * @property $articulo
 * @property $nrolote
 * @property $fechavencimiento
 * @property $entrada
 * @property $salida
 * @property $saldo
 * @property $entradabs
 * @property $salidabs
 * @property $saldobs
 * @property $id_articulo
 * @property $visible
 * @property $created_at
 * @property $updated_at
 *
 * @property Entrada $entrada
 * @property Articulo $articulo
 * @property Salida $salida
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inventario extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['clasificador', 'codigo', 'articulo', 'nrolote', 'fechavencimiento', 'entrada', 'salida', 'saldo', 'entradabs', 'salidabs', 'saldobs', 'id_articulo', 'visible'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function entrada()
    {
        return $this->belongsTo(\App\Models\Entrada::class, 'entrada', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function articulo()
    {
        return $this->belongsTo(\App\Models\Articulo::class, 'id_articulo', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function salida()
    {
        return $this->belongsTo(\App\Models\Salida::class, 'salida', 'id');
    }
    
}
