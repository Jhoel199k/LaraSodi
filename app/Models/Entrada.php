<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Entrada
 *
 * @property $id
 * @property $estado
 * @property $fechayhora
 * @property $tipo
 * @property $total_costo
 * @property $glosa
 * @property $origen
 * @property $registrador_id
 * @property $linea
 * @property $created_at
 * @property $updated_at
 *
 * @property Usuario $usuario
 * @property Inventario[] $inventarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Entrada extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['estado', 'fechayhora', 'tipo', 'total_costo', 'glosa', 'origen', 'registrador_id', 'linea'];


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
    public function inventarios()
    {
        return $this->hasMany(\App\Models\Inventario::class, 'id', 'entrada');
    }
    
}
