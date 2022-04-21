@extends('layouts.front')
@section('title')
Wishlist items
@endsection
@section('content')
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card">
          <div class="card-body  p-4">

            @if($wishlistItems->count() > 0)
                @foreach ($wishlistItems as $wishlistItem)
                    <div class="card-body product_data form_data">
                        <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row ">
                            <div>
                            <img
                                src="{{ asset('assets/uploads/product/'. $wishlistItem->products->image) }}"
                                class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                            </div>
                            <div class="ms-3">
                            <h5>{{ $wishlistItem->products->name }}</h5>
                            <p class="small mb-0">256GB, Navy Blue</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <div style="width: 50px;">
                                <div class="counter" style="margin-left: -128px;
                                margin-top: -36px;">
                                @if($wishlistItem->products->qty >= $wishlistItem->pro_qty)
                                    <div class="value-button   decrease_it" id="decrease" onclick="" value="Decrease Value">-</div>
                                    <input type="number" class="pro_qty" name="pro_qty" id="number" value="1" />
                                    <div class="value-button   increase_it" id="increase" onclick="" value="Increase Value">+</div>

                                @else
                                    </h2>out of stock</h2>
                                @endif

                                </div>
                            </div>
                            <div style="width: 80px;">
                            <h5 class="mb-0">{{ $wishlistItem->products->selling_price  }}</h5>
                            </div>
                            <input class="pro_id" type="hidden" value="{{ $wishlistItem->products->id }}">

                            <div style="width: 80px; margin-right: 80px">

                                <button  class="btn btn-success mr-5 addtocartbtn">Add to cart</button>
                            </div>

                            <div style="width: 80px; margin-right: 40px">
                                <button class="btn delete_from_whishlist btn-danger">delete</button>
                            </div>

                            <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                        </div>
                        </div>
                    </div>
                @endforeach

            @else

                <h4>There are no items in your wishlist</h4>

            @endif

          </div>
        </div>
      </div>
    </div>
  </div>

@endsection


