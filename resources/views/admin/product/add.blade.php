@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Add Product</h4>
          {{-- <p class="card-category">Complete your profile</p> --}}
        </div>
        <div class="card-body">
          <form method="POST" action="{{  route('insert.product') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                         {{-- 14 --}}

              <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating">Name</label>
                  <input type="text" class="form-control" name="name">
                </div>
              </div>
                          {{-- 13 --}}

              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Slug</label>
                  <input type="text" class="form-control" name="slug">
                </div>
              </div>
            </div>

            {{-- 12 --}}

            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">small description</label>
                    <input type="text" name="small_description" class="form-control" name="meta_title">
                  </div>
                </div>
                            {{-- 11 --}}

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">original_price</label>
                    <input type="text" name="original_price" class="form-control" name="meta_desc">
                  </div>
                </div>
              </div>
            </div>
            {{-- 10 --}}

            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">selling_price</label>
                    <input type="text" name="selling_price" class="form-control" name="meta_title">
                  </div>
                </div>
                            {{-- 9 --}}

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">quantity</label>
                    <input type="text" name="qty" class="form-control" name="meta_desc">
                  </div>
                </div>
              </div>
            </div>
            {{-- 8 --}}

            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">tax</label>
                    <input type="text" name="tax" class="form-control" name="meta_title">
                  </div>
                </div>
                            {{-- 7 --}}

                {{-- <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">trending</label>
                    <input type="text" name="trending" class="form-control" name="meta_desc">
                  </div>
                </div> --}}
              </div>
            </div>

            
            {{-- 6 --}}

            <div class="row">
                <div class="col-md-12">

                    <select name="cate_id" class="form-select" aria-label="Default select example">
                        <option selected>Choose category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>

                        @endforeach
                        
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="">
                <div class="">
                    <input class="form-check-input" name="trending" type="checkbox" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      trending
                    </label>
                  </div> 
            {{-- 5--}}

                  <div class="col-md-12">
                    <input class="form-check-input" name="status" type="checkbox"  id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        status
                    </label>
                  </div>
            </div>

            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">media_title</label>
                  <input type="text" class="form-control" name="media_title">
                </div>
              </div>
                          {{-- 4 --}}

              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">media_description</label>
                  <input type="text" class="form-control" name="media_description">
                </div>
              </div>
            </div>
               {{-- 3 --}}
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">media_keywords</label>
                  <input type="text" class="form-control" name="media_keywords">
                </div>
               
              </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div>
                        <label for="formFileLg" class="form-label">Large file input example</label>
                        <input name="image" class="form-control form-control-lg" id="formFileLg" type="file">
                      </div>
                </div>
            </div>

            {{-- 2 --}}

            
           
            {{-- <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">City</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Country</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Postal Code</label>
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>--}}

            {{-- 1 --}}
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Description</label>
                  <div class="form-group">
                    <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                    <textarea class="form-control" rows="5" name="description"></textarea>
                  </div>
                </div>
              </div>
            </div> 
            <button type="submit" class="btn btn-primary pull-right">Add</button>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-4">
     
       
      
    </div>
  </div>
@endsection