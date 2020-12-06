<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table = "products";
    public $timestamps = false;

    public function order()
    {
        return $this->hasMany('App\Models\orders', 'product_id', 'id');
    }
}
