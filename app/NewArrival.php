<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $title
 * @property string $date
 * @property string $content
 * @property string $img
 * @property string $created_at
 * @property string $updated_at
 */
class NewArrival extends Model
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
    protected $fillable = ['title', 'date', 'content', 'img', 'created_at', 'updated_at'];

}
