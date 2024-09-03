<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pedido
 *
 * @property $id
 * @property $estado
 * @property $fechayhora
 * @property $nro
 * @property $total_ventas
 * @property $pagado
 * @property $saldo
 * @property $cliente_id
 * @property $operacion
 * @property $f
 * @property $e
 * @property $registrador_id
 * @property $linea
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Usuario $usuario
 * @property Venta[] $ventas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pedido extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['estado', 'fechayhora', 'nro', 'total_ventas', 'pagado', 'saldo', 'cliente_id', 'operacion', 'f', 'e', 'registrador_id', 'linea'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cliente()
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'cliente_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo(\App\Models\Usuario::class, 'registrador_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventas()
    {
        return $this->hasMany(\App\Models\Venta::class, 'id', 'pedido_id');
    }
    
}
