<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Caja
 *
 * @property $id
 * @property $estado
 * @property $fechayhora
 * @property $tipo
 * @property $nro
 * @property $glosa
 * @property $pagado
 * @property $cliente_id
 * @property $operacion
 * @property $registrador_id
 * @property $linea
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Caja extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['estado', 'fechayhora', 'tipo', 'nro', 'glosa', 'pagado', 'cliente_id', 'operacion', 'registrador_id', 'linea'];


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
    
}
