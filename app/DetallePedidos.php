<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $order_products_id
 * @property int $order_id
 * @property int $product_id
 * @property int $quantity
 * @property float $price
 * @property Product $product
 * @property Order $order
 */
class DetallePedidos extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'orders_products';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'order_products_id';

    /**
     * @var array
     */
    protected $fillable = ['order_id', 'product_id', 'quantity', 'price'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('App\Product', null, 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order()
    {
        return $this->belongsTo('App\Order', null, 'order_id');
    }
}
