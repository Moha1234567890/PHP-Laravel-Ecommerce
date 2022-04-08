<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Category;

class FrontendController extends Controller
{
    

    public function index() {

        $featuredProducts = Product::where('trending', '1')->take(15)->get();
        $trendingCategories = Category::where('popular', '1')->take(15)->get();

        return view('front.index', compact(['featuredProducts', 'trendingCategories']));
    }

    public function category() {

        $featuredCategories = Category::where('status', '0')->get();


        return view('front.category', compact('featuredCategories'));
    }
}
