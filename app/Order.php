<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $order_number
 * @property int $user_id
 * @property int $product_id
 * @property string $name
 * @property int $price
 * @property int $qty
 * @property string $img
 * @property string $created_at
 * @property string $updated_at
 */
class Order extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['order_number', 'user_id', 'product_id', 'name', 'price', 'total_price','qty', 'img', 'order_status', 'created_at', 'updated_at'];

    public function user(){
        return $this->hasOne('App\User','id','user_id');
    }

    public function orderStatus()
    {
        return $this->hasOne('App\OrderStatus','id','order_status');
    }

}
