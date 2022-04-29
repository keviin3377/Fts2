<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $n_producto
 * @property $d_producto
 * @property $precio
 * @property $id_categoria
 * @property $imagen
 * @property $created_at
 * @property $updated_at
 *
 * @property Carrito[] $carritos
 * @property Categoria $categoria
 * @property ProdProv[] $prodProvs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'n_producto' => 'required',
		'd_producto' => 'required',
		'precio' => 'required',
		'id_categoria' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['n_producto','d_producto','precio','id_categoria','imagen'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carritos()
    {
        return $this->hasMany('App\Models\Carrito', 'id_producto', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'id_categoria');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prodProvs()
    {
        return $this->hasMany('App\Models\ProdProv', 'id_producto', 'id');
    }
    

}
