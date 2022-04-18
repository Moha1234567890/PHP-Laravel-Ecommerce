<?php

namespace App\Models\Fronted;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Product;


class OrderItem extends Model
{
    use HasFactory;

    protected $table = 'order_items';


    protected $fillable = [
        'order_id',
        'prod_id',
        'qty',
        'price',

    ];

    public function productsToOrder()
    {
        return $this->belongsTo(Product::class, 'prod_id', 'id');
    }
}
