<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 *
 * @property $id
 * @property $idsistema
 * @property $estado
 * @property $fechahora
 * @property $tipo
 * @property $nRO
 * @property $totalventas
 * @property $cliente
 * @property $autorizacion
 * @property $f
 * @property $codigo_control
 * @property $nit_cliente
 * @property $e
 * @property $registrador
 * @property $idpedido
 * @property $linea
 * @property $cliente_id
 * @property $registrador_id
 * @property $pedido_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Ruta $ruta
 * @property Pedido $pedido
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Venta extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['idsistema', 'estado', 'fechahora', 'tipo', 'nRO', 'totalventas', 'cliente', 'autorizacion', 'f', 'codigo_control', 'nit_cliente', 'e', 'registrador', 'idpedido', 'linea', 'cliente_id', 'registrador_id', 'pedido_id'];


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
    public function ruta()
    {
        return $this->belongsTo(\App\Models\Ruta::class, 'idpedido', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pedido()
    {
        return $this->belongsTo(\App\Models\Pedido::class, 'pedido_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo(\App\Models\Usuario::class, 'registrador_id', 'id');
    }
    
}
