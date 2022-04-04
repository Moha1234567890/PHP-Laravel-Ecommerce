<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('admin.category.index');
    }  
    
    public function add() {
        return view('admin.category.add');
    }

    public function insert(Request $request) {


      //  dd($request);
        $category = new Category();

        if($request->hasFile('image')) {

            //get value

            $file = $request->file('image');

            //get extison

            $ext = $file->getClientOriginalExtension();

            $filename = time() . '.' . $ext;

            //move file

            $file->move('assets/uploads/category'. $filename);

            $category->image = $filename;


        
        }

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->popular = $request->input('popular') == TRUE ? '1' : '0';
        $category->status = $request->input('status') == TRUE ? '1' : '0';
        $category->meta_title = $request->input('meta_title');
        $category->meta_desc = $request->input('meta_desc');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->description = $request->input('description');
        $category->save();
        return redirect('/categories');
    }
}
