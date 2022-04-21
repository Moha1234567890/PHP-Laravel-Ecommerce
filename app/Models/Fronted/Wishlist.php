<?php

namespace App\Models\Fronted;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Product;

class Wishlist extends Model
{
    use HasFactory;

    protected $table = 'wishlists';

    protected $fillable = [
        'prod_id',
        'user_id',
    ];


    public function products() {
        return $this->belongsTo(Product::class, 'prod_id', 'id');
    }

}
