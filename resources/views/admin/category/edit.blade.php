@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Add Category</h4>
          {{-- <p class="card-category">Complete your profile</p> --}}
        </div>
        <div class="card-body">
          <form method="POST" action="{{  url('category-update/'. $category->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
             
              <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating">Name</label>
                  <input type="text" value="{{ $category->name }}" class="form-control" name="name">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Slug</label>
                  <input type="text" class="form-control" value="{{ $category->slug }}" name="slug">
                </div>
              </div>
            </div>

            <div class="row">
                <div class="">
                <div class="">
                    <input class="form-check-input" {{ $category->popular == '1' ? 'checked' : '' }} name="popular" type="checkbox" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      popular
                    </label>
                  </div>

                  <div class="">
                    <input class="form-check-input" {{ $category->status == '1' ? 'checked' : '' }} name="status" type="checkbox"  id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        status
                    </label>
                  </div>
            </div>

            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">meta_title</label>
                  <input type="text" class="form-control"  value="{{ $category->meta_title }}" name="meta_title">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">meta_desc</label>
                  <input type="text" class="form-control"  value="{{ $category->meta_desc }}" name="meta_desc">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">meta_keywords</label>
                  <input type="text" class="form-control" value="{{ $category->meta_keywords }}" name="meta_keywords">
                </div>
              </div>
            </div>


            <div class="col-md-12">
                @if($category->image)
                  <img class="img-category" src="{{ asset('assets/uploads/category/' . $category->image) }}" alt="">
                @endif

                <div>
                    <label for="formFileLg" class="form-label">Image</label>
                    <input name="image" class="form-control form-control-lg" id="formFileLg" type="file">
                    
                  </div>
            </div>
           
   
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Description</label>
                  <div class="form-group">
                    <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                    <textarea   class="form-control" rows="5" name="description">{{ $category->description }}</textarea>
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