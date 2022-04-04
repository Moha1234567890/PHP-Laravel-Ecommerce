<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\File;
use App\Models\Admin\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {

        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
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

            $file->move('assets/uploads/category', $filename);

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


    //edit catefory

    public function edit($id) {
        $category = Category::find($id);


        return view('admin.category.edit', compact('category'));
    }


    public function update(Request $request, $id) {

        $category = Category::find($id);
        if($request->hasFile('image')) {

            $path = 'assets/uplodas/category/' . $category->image;

            if(File::exists($path)) {


                File::delete($path);


                $file = $request->file('image');

                //get extison
    
                $ext = $file->getClientOriginalExtension();
    
                $filename = time() . '.' . $ext;
    
                //move file
    
                $file->move('assets/uploads/category/', $filename);
    
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
            $category->update();
            return redirect('/categories');

        }
       // dd($request);


    }
}
