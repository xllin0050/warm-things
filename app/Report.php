<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table= 'reports';
    protected $fillable= ['img','title','date','content','created_at','updated_at'];
}

