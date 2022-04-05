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
          <form method="POST" action="{{  route('insert.category') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
             
              <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating">Name</label>
                  <input type="text" class="form-control" name="name">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Slug</label>
                  <input type="text" class="form-control" name="slug">
                </div>
              </div>
            </div>

            <div class="row">
                <div class="">
                <div class="">
                    <input class="form-check-input" name="popular" type="checkbox" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      popular
                    </label>
                  </div>

                  <div class="">
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
                  <label class="bmd-label-floating">meta_title</label>
                  <input type="text" class="form-control" name="meta_title">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">meta_desc</label>
                  <input type="text" class="form-control" name="meta_desc">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">meta_keywords</label>
                  <input type="text" class="form-control" name="meta_keywords">
                </div>
              </div>
            </div>


            <div class="col-md-12">
                <div>
                    <label for="formFileLg" class="form-label">Large file input example</label>
                    <input name="image" class="form-control form-control-lg" id="formFileLg" type="file">
                  </div>
            </div>
           
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