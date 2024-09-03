<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $codigo
 * @property $cliente
 * @property $nit_ci
 * @property $razon_social
 * @property $descripcion
 * @property $ciudad
 * @property $zona
 * @property $dias
 * @property $id_vendedor
 * @property $vendedor
 * @property $correo_sin
 * @property $created_at
 * @property $updated_at
 *
 * @property Usuario $usuario
 * @property Caja[] $cajas
 * @property Pedido[] $pedidos
 * @property Venta[] $ventas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['codigo', 'cliente', 'nit_ci', 'razon_social', 'descripcion', 'ciudad', 'zona', 'dias', 'id_vendedor', 'vendedor', 'correo_sin'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo(\App\Models\Usuario::class, 'id_vendedor', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cajas()
    {
        return $this->hasMany(\App\Models\Caja::class, 'id', 'cliente_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidos()
    {
        return $this->hasMany(\App\Models\Pedido::class, 'id', 'cliente_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventas()
    {
        return $this->hasMany(\App\Models\Venta::class, 'id', 'cliente_id');
    }
    
}
