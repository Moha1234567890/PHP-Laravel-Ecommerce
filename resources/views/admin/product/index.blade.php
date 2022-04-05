@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Products</h4>
          <p class="card-category">Showing your products</p>
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

                @foreach ($products as $product)
                <tr>
                    <td>
                     {{ $product->id }}
                    </td>
                    <td>
                     {{ $product->name }}
                    </td>
                    <td>
                     {{ $product->description }}
                    </td>
                    <td>
                        <img class="img-category" src="{{ asset('assets/uploads/product/'.$product->image) }}" alt="img" />
                    </td>
                    <td>
                        <a href="{{ url('category-edit/'.$product->id) }}" class="btn btn-primary">Update</button>
                        <a href="{{ url('category-delete/'.$product->id) }}" class="btn btn-danger text-white">delete</a>
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