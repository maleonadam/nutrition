<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class OrderProduct extends Model
{
    protected $fillable = ['order_id', 'product_id', 'quantity', 'item_status', 'item_result'];


    // relate to product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
