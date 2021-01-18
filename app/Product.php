<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $type_id
 * @property string $name
 * @property int $price
 * @property string $description
 * @property string $img
 * @property string $created_at
 * @property string $updated_at
 */
class Product extends Model
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
    protected $fillable = ['type_id', 'name', 'price', 'description', 'img', 'created_at', 'updated_at'];

    public function productType()
    {
        return $this->hasOne('App\ProductType','id','type_id');
    }
}
