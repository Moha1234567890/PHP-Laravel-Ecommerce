<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [

        'name',
        'slug',
        'status',
        'popular',
        'description',
        'meta_title',
        'meta_desc',
        'meta_keywords',
        'image',
    ];
}
