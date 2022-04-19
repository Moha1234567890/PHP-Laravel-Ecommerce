<?php

namespace App\Models\Fronted;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Fronted\orderItem;


class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';


    protected $fillable = [

        'user_id',
        'fname',
        'lname',
        'email',
        'phone',
        'address_1',
        'address_2',
        'city',
        'state',
        'country',
        'pincode',
        'total_price',
        'status',
        'message',
        'tracking_no',
    ];

    public function orderItems() {
        return $this->hasMany(orderItem::class, 'order_id', 'id');
    }
}
