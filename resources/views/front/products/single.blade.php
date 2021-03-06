@extends('layouts.front')
@section('title')
{{ $single_product->name }}
@endsection
@section('content')

<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card product_data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="text-center p-4"> <img id="main-image" src="{{ asset('assets/uploads/product/'. $single_product->image) }}" width="250" /> </div>
                            {{-- <div class="thumbnail text-center"> <img onclick="change_image(this)" src="https://i.imgur.com/Rx7uKd0.jpg" width="70"> <img onclick="change_image(this)" src="https://i.imgur.com/Dhebu4F.jpg" width="70"> </div> --}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                {{-- <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> <span class="ml-1">Back</span> </div> <i class="fa fa-shopping-cart text-muted"></i> --}}
                            </div>
                            <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">Name: </span>
                                @if($single_product->trending == '1')
                                    <label style="font-size: 16px" class="float-right badge bg-danger text-white trending_tag">trending</label>
                                @endif
                                <h2 class="text-uppercase">{{ $single_product->name }}</h2>

                                <div class="price d-flex flex-row align-items-center"> <span class="act-price">{{ $single_product->original_price }}</span>
                                    <div class="ml-2"> <small class="dis-price">{{ $single_product->selling_price }}</small> <span>40% OFF</span> </div>
                                </div>
                            </div>
                            <p class="about">{{ $single_product->description }}</p>
                            {{-- <div class="sizes mt-5">
                                <h6 class="text-uppercase">Size</h6> <label class="radio"> <input type="radio" name="size" value="S" checked> <span>S</span> </label> <label class="radio"> <input type="radio" name="size" value="M"> <span>M</span> </label> <label class="radio"> <input type="radio" name="size" value="L"> <span>L</span> </label> <label class="radio"> <input type="radio" name="size" value="XL"> <span>XL</span> </label> <label class="radio"> <input type="radio" name="size" value="XXL"> <span>XXL</span> </label>
                            </div> --}}


                            <div class="row">
                                <div class="col-md-4 form_data">
                                    @if($single_product->qty > 0)
                                    <label style="font-size: 13px" class="float-left badge bg-success text-white trending_tag">In stock</label>

                                @else
                                    <label style="font-size: 13px" class="float-left badge bg-danger text-white trending_tag">Out of stock</label>

                                @endif

                                <input type="hidden" class="pro_id" name="pro_id" value="{{ $single_product->id }}">
                                    <div class="counter">
                                                    <div class="value-button decrease_it" id="decrease" onclick="" value="Decrease Value">-</div>
                                                       <input type="number" class="pro_qty" name="pro_qty" id="number" value="1" />
                                                    <div class="value-button increase_it" id="increase" onclick="" value="Increase Value">+</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    @if($single_product->qty > 0)

                                    <div class="cart mt-4"> <button class="btn btn-success addtocartbtn text-uppercase mr-2 px-4">Add to cart</button>  </div>

                                    @endif
                                </div>
                            <div class="col-md-4">

                                <div class="cart mt-4"> <button class="btn btn-primary add-to-wishlist text-uppercase mr-2 px-4">Add to wishlist</button>
                                    {{-- <i class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


