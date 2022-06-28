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
}
