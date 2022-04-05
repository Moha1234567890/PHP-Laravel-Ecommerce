<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Product;
use App\Models\Admin\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\File;

class ProductsController extends Controller
{
    

    public function index() {

        $products = Product::all();

        return view('admin.product.index', compact('products'));


    }

    public function add() {

        $categories = Category::all();

        return view('admin.product.add', compact('categories'));
    }

    public function insert(Request $request) {


        //  dd($request);
        $product = new Product();

        if($request->hasFile('image')) {

            //get value

            $file = $request->file('image');

            //get extison

            $ext = $file->getClientOriginalExtension();

            $filename = time() . '.' . $ext;

            //move file

            $file->move('assets/uploads/product', $filename);

            $product->image = $filename;


        
        }

        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->trending = $request->input('trending') == TRUE ? '1' : '0';
        $product->status = $request->input('status') == TRUE ? '1' : '0';
        $product->media_title = $request->input('media_title');
        $product->media_description = $request->input('media_description');
        $product->media_keywords = $request->input('media_keywords');
        $product->description = $request->input('description');

        $product->cate_id = $request->input('cate_id');
        $product->tax = $request->input('tax');
        $product->qty = $request->input('qty');
        $product->selling_price = $request->input('selling_price');
        $product->original_price = $request->input('original_price');
        $product->small_description = $request->input('small_description');

        



        $product->save();
        return redirect('/products')->with('status', 'product added');
    }


    public function edit($id) {
        $product = Product::find($id);
        $categories = Category::all();


        return view('admin.product.edit', compact(['product', 'categories']));
    }


    public function update(Request $request, $id) {

        $product = Product::find($id);
        if($request->hasFile('image')) {

            $path = 'assets/uplodas/product/' . $product->image;

            if(File::exists($path)) {


                File::delete($path);


              
            }


            $file = $request->file('image');

            //get extison

            $ext = $file->getClientOriginalExtension();

            $filename = time() . '.' . $ext;

            //move file

            $file->move('assets/uploads/product/', $filename);

            $product->image = $filename;



          

        }



        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->trending = $request->input('trending') == TRUE ? '1' : '0';
        $product->status = $request->input('status') == TRUE ? '1' : '0';
        $product->media_title = $request->input('media_title');
        $product->media_description = $request->input('media_description');
        $product->media_keywords = $request->input('media_keywords');
        $product->description = $request->input('description');

        $product->cate_id = $request->input('cate_id');
        $product->tax = $request->input('tax');
        $product->qty = $request->input('qty');
        $product->selling_price = $request->input('selling_price');
        $product->original_price = $request->input('original_price');
        $product->small_description = $request->input('small_description');


        $product->update();
        return redirect('/products')->with('status', 'product updated');

    }


    public function delete($id) {

        $product = Product::find($id);

        if($product->image) {

            $path = 'assets/uplodas/product/' . $product->image;

            if(File::exists($path)) {


                File::delete($path);


              
            }
        }

        $product->delete();   
        
        return redirect('products')->with('session', 'product deleted');
    }
}
