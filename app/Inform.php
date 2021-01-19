<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $title
 * @property string $openingDate
 * @property string $closingDate
 * @property string $img
 * @property string $content
 * @property string $created_at
 * @property string $updated_at
 */
class Inform extends Model
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
    protected $fillable = ['title', 'openingDate', 'closingDate', 'img', 'content', 'created_at', 'updated_at'];

}
