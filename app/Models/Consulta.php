<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Consulta
 *
 * @property $id
 * @property $codigo
 * @property $articulo
 * @property $lote
 * @property $fvencimiento
 * @property $precioventa
 * @property $saldo
 * @property $id_articulo
 * @property $created_at
 * @property $updated_at
 *
 * @property Articulo $articulo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Consulta extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['codigo', 'articulo', 'lote', 'fvencimiento', 'precioventa', 'saldo', 'id_articulo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function articulo()
    {
        return $this->belongsTo(\App\Models\Articulo::class, 'id_articulo', 'id');
    }
    
}
