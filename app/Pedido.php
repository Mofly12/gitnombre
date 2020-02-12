<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $order_id
 * @property int $user_id
 * @property string $order_date
 * @property User $user
 * @property OrdersProduct[] $ordersProducts
 */
class Pedido extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'orders';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'order_id';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'order_date'];

    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', null, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ordersProducts()
    {
        return $this->hasMany('App\OrdersProduct', null, 'order_id');
    }
}
