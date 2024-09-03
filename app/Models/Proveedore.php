<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedore
 *
 * @property $id
 * @property $proveedor
 * @property $created_at
 * @property $updated_at
 *
 * @property Articulo[] $articulos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedore extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['proveedor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articulos()
    {
        return $this->hasMany(\App\Models\Articulo::class, 'id', 'proveedor_id');
    }
    
}
