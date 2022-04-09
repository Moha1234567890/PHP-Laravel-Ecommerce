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


    public function categoryWithProducts($slug) {

        if(Category::where('slug', $slug)->exists()) {
            $category = Category::where('slug', $slug)->first();
            $product = Product::where('cate_id', $category->id)->where('status', '0')->get();

            return view('front.products.index', compact(['category', 'product']));

        } else {
            return redirect('/')->with('status', 'slug does not exist');
        }
    }


    public function singleProduct($cate_slug, $pro_slug) {

        if(Category::where('slug', $cate_slug)->exists()) {
                if(Product::where('slug', $pro_slug)->exists()) {
                    $single_product = Product::where('slug', $pro_slug)->first();

                    return view('front.products.single', compact('single_product'));
                } else {
                    return redirect('/')->with('status', 'link is broken or smth');
                } 
                
       
        }  else {
            return redirect('/')->with('status', 'link is broken or smth');
        }
    }
}
