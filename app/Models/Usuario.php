<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $nombre_usuario
 * @property $nivel_acceso
 * @property $id_rol
 * @property $created_at
 * @property $updated_at
 *
 * @property Role $role
 * @property Caja[] $cajas
 * @property Cliente[] $clientes
 * @property Entrada[] $entradas
 * @property Pedido[] $pedidos
 * @property Salida[] $salidas
 * @property Venta[] $ventas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre_usuario', 'nivel_acceso', 'id_rol'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(\App\Models\Role::class, 'id_rol', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cajas()
    {
        return $this->hasMany(\App\Models\Caja::class, 'id', 'registrador_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientes()
    {
        return $this->hasMany(\App\Models\Cliente::class, 'id', 'id_vendedor');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entradas()
    {
        return $this->hasMany(\App\Models\Entrada::class, 'id', 'registrador_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidos()
    {
        return $this->hasMany(\App\Models\Pedido::class, 'id', 'registrador_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salidas()
    {
        return $this->hasMany(\App\Models\Salida::class, 'id', 'registrador_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventas()
    {
        return $this->hasMany(\App\Models\Venta::class, 'id', 'registrador_id');
    }
    
}
