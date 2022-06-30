<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['product_name', 'product_type', 'price', 'product_color', 'img', 'description', 'size', 'product_section', 'user_id'];

    public function user()
    {
        return $this->belongsTo(user::class);
    }
    protected $fill = ['number_of_items', 'total_price', 'status', 'user_id', 'created_at', 'updated_at'];

    public function product()
    {
        return $this->belongsTo(product::class);
    }
}
