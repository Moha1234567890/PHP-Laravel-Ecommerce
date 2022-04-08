<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Product;

class FrontendController extends Controller
{
    

    public function index() {

        $featuredProducts = Product::where('trending', '1')->take(15)->get();

        return view('front.index', compact('featuredProducts'));
    }
}
