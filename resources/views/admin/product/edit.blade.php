@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Add Product</h4>
          <p class="card-category">Complete your profile</p>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('update.product', $product->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                         {{-- 14 --}}

              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Name</label>
                  <input type="text" value="{{ $product->name }}" class="form-control" name="name">
                </div>
              </div>
                          {{-- 13 --}}

              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Slug</label>
                  <input type="text" value="{{ $product->slug }}" class="form-control" name="slug">
                </div>
              </div>
            </div>

            {{-- 12 --}}

            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">small description</label>
                    <input type="text" value="{{ $product->small_description }}" name="small_description" class="form-control" name="meta_title">
                  </div>
                </div>
                            {{-- 11 --}}

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">original_price</label>
                    <input type="text"  value="{{ $product->small_description }}" name="original_price" class="form-control" name="meta_desc">
                  </div>
                </div>
              </div>
            </div>
            {{-- 10 --}}

            <div class="row">
                <div class="col-md-6">
                  <div class="form-group margin-left">
                    <label class="bmd-label-floating">selling_price</label>
                    <input type="text"  value="{{ $product->selling_price }}" name="selling_price" class="form-control" name="meta_title">
                  </div>
                </div>
                            {{-- 9 --}}

                <div class="col-md-6">
                  <div class="form-group margin-left">
                    <label class="bmd-label-floating">quantity</label>
                    <input type="text" value="{{ $product->qty }}" name="qty" class="form-control" name="meta_desc">
                  </div>
                </div>
            </div>
            {{-- 8 --}}

            <div class="row">
                <div class="col-md-6">
                  <div class="form-group margin-left">
                    <label class="bmd-label-floating">tax</label>
                    <input type="text" value="{{ $product->tax }}" name="tax" class="form-control" >
                  </div>
                </div>
                            {{-- 7 --}}

                
            </div>

            
            {{-- 6 --}}

            <div class="row">
                <div class="col-md-12 margin-left">
                  <?php 
                 
        
                  ?>
                    <select name="cate_id" class="form-select custom-select" aria-label="Default select example">
                        <option selected>Choose category</option>
                        @foreach ($categories as $category)
                        
                            <option {{ $category->id == $product->cate_id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>

                        @endforeach


                        
                    </select>
                </div>
            </div>

            <br>

            <div class="row">
                  <div class="col-md-6 margin-left">
                    <input class="form-check-input" {{ $product->trending == '1' ? 'checked' : '' }} name="trending" type="checkbox" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      trending
                    </label>
                  </div> 

                  <div class="col-md-6 margin-left">
                    <input class="form-check-input" name="status" {{ $product->status == '1' ? 'checked' : '' }} type="checkbox"  id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        status
                    </label>
                  </div>
               

            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group margin-left">
                  <label class="bmd-label-floating">media_title</label>
                  <input type="text" value="{{ $product->media_title }}" class="form-control" name="media_title">
                </div>
              </div>
                          {{-- 4 --}}

              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">media_description</label>
                  <input type="text" class="form-control" value="{{ $product->media_description }}" name="media_description">
                </div>
              </div>
            </div>
               {{-- 3 --}}
            <div class="row">
              <div class="col-md-12">
                <div class="form-group margin-left">
                  <label class="bmd-label-floating">media_keywords</label>
                  <input type="text" class="form-control" value="{{ $product->media_keywords }}" name="media_keywords">
                </div>
               
              </div>
            </div>

            <div class="row">
                <div class="col-md-12 margin-left">
                    <div>
                      @if($product->image)
                        <img class="img-category" src="{{ asset('assets/uploads/product/' . $product->image) }}" alt="">
                      @endif
                        <label for="formFileLg" class="form-label">Large file input example</label>
                        <input name="image" class="form-control form-control-lg" id="formFileLg" type="file">
                      </div>
                </div>
            </div>

            {{-- 2 --}}

            
           
           

            {{-- 1 --}}
            <div class="row">
              <div class="col-md-12">
                <div class="form-group margin-left">
                  <label>Description</label>
                  <div class="form-group">
                    <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                    <textarea class="form-control" rows="5" name="description">{{ $product->description }}</textarea>
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
   
     
       
      
    </div>
  </div>
@endsection