<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $product_id
 * @property string $name
 * @property float $price
 * @property int $stock
 * @property string $path_img
 * @property OrdersProduct[] $ordersProducts
 */
class Producto extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'products';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'product_id';

    /**
     * @var array
     */
    protected $fillable = ['name', 'price', 'stock', 'path_img'];

    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ordersProducts()
    {
        return $this->hasMany('App\OrdersProduct', null, 'product_id');
    }
}
