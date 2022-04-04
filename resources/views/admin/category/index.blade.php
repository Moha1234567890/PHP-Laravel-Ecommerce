@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Categories</h4>
          <p class="card-category">Showing your categories</p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  ID
                </th>
                <th>
                  Name
                </th>
                <th>
                  Description
                </th>
                <th>
                  Image
                </th>
                <th>
                  Action
                </th>
               
              </thead>
              <tbody>

                @foreach ($categories as $category)
                <tr>
                    <td>
                     {{ $category->id }}
                    </td>
                    <td>
                     {{ $category->name }}
                    </td>
                    <td>
                     {{ $category->description }}
                    </td>
                    <td>
                        <img class="img-category" src="{{ asset('assets/uploads/category/'.$category->image) }}" alt="img" />
                    </td>
                    <td>
                        <a href="{{ url('category-edit/'.$category->id) }}" class="btn btn-primary">Update</button>
                        <button class="btn btn-danger">delete</button>
                    </td>
                  </tr>
                @endforeach
               
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
@endsection