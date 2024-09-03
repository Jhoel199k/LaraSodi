<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Articulo
 *
 * @property $id
 * @property $clasificador
 * @property $codigo_interno
 * @property $linea
 * @property $descripcion
 * @property $precio1
 * @property $precio2
 * @property $precio3
 * @property $precio4
 * @property $codigo_producto_sin
 * @property $codigo_unidad
 * @property $nombre_unidad
 * @property $proveedor_id
 * @property $descuento_farmacia
 * @property $descuento_6_meses
 * @property $descuento_3_meses
 * @property $created_at
 * @property $updated_at
 *
 * @property Proveedore $proveedore
 * @property Consulta[] $consultas
 * @property Inventario[] $inventarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Articulo extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['clasificador', 'codigo_interno', 'linea', 'descripcion', 'precio1', 'precio2', 'precio3', 'precio4', 'codigo_producto_sin', 'codigo_unidad', 'nombre_unidad', 'proveedor_id', 'descuento_farmacia', 'descuento_6_meses', 'descuento_3_meses'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proveedore()
    {
        return $this->belongsTo(\App\Models\Proveedore::class, 'proveedor_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultas()
    {
        return $this->hasMany(\App\Models\Consulta::class, 'id', 'id_articulo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventarios()
    {
        return $this->hasMany(\App\Models\Inventario::class, 'id', 'id_articulo');
    }
    
}
