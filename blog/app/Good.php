<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    protected $table = 'goods';

    public $timestamps = false;

    protected $primaryKey = 'goods_id';


    protected $fillable = ['goods_id', 'name', 'keywords', 'description', 'img', 'goods_typeid', 'size_id', 'size', 'anons',
        'content', 'visible', 'hits', 'new', 'sale', 'price', 'img_slim', 'articul'];
}
