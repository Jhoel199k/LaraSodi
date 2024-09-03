<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ruta
 *
 * @property $id
 * @property $origen
 * @property $destino
 * @property $fecha_salida
 * @property $fecha_llegada
 * @property $rastreo_gps
 * @property $created_at
 * @property $updated_at
 *
 * @property Venta[] $ventas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ruta extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['origen', 'destino', 'fecha_salida', 'fecha_llegada', 'rastreo_gps'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventas()
    {
        return $this->hasMany(\App\Models\Venta::class, 'id', 'idpedido');
    }
    
}
