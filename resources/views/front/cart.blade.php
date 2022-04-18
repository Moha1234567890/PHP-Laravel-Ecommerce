@extends('layouts.front')
@section('title')
Cart Items
@endsection
@section('content')
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card ">
          <div class="card-body  p-4">

            <div class="row ">

              <div class="col-md-12">
                <h5 class="mb-3"><a href="#!" class="text-body"><i
                      class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                <hr>

                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                    <p class="mb-1">Shopping cart</p>
                    <p class="mb-0">You have 4 items in your cart</p>
                  </div>
                  <div>
                    <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!"
                        class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
                  </div>
                </div>
                @php $total = 0; @endphp
                    @if($cartItems->count() > 0)
                    @foreach ($cartItems as $cartItem)

                    <div class="card mb-3 form_data">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row ">
                            <div>
                            <img
                                src="{{ asset('assets/uploads/product/'. $cartItem->products->image) }}"
                                class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                            </div>
                            <div class="ms-3">
                            <h5>{{ $cartItem->products->name }}</h5>
                            <p class="small mb-0">256GB, Navy Blue</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <div style="width: 50px;">
                                <div class="counter" style="margin-left: -128px;
                                margin-top: -36px;">
                                @if($cartItem->products->qty >= $cartItem->pro_qty)
                                    <div class="value-button change_qty decrease_it" id="decrease" onclick="" value="Decrease Value">-</div>
                                    <input type="number" class="pro_qty" name="pro_qty" id="number" value="{{ $cartItem->pro_qty }}" />
                                    <div class="value-button change_qty increase_it" id="increase" onclick="" value="Increase Value">+</div>

                                @else
                                    </h2>out of stock</h2>
                                @endif

                                </div>
                            </div>
                            <div style="width: 80px;">
                            <h5 class="mb-0">{{ $cartItem->products->selling_price  }}</h5>
                            </div>
                            <input class="prod_id" type="hidden" value="{{ $cartItem->products->id }}">

                            <div style="width: 80px; margin-right: 40px">
                                <button class="btn delete_from_cart btn-danger">delete</button>
                            </div>

                            <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                    @php $total += $cartItem->products->selling_price * $cartItem->pro_qty; @endphp

                    @endforeach


              <div class="col-lg-5">



              </div>
              <div class="card card-footer">
                 Total price: $ {{ $total }}
                 <div class="pull-right">
                    <a href="{{ route('checkout') }}" class="btn btn-success"> Processed to checkout</a>
                 </div>
                 @else
                    <h3 class="text-center">you have no items in your cart</h3>
                    <a href="{{ url('category') }}" class="pull-right btn btn-success"> Continue shopping</a>
                @endif

              </div>



            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

@endsection


@section('scripts')
<script>



    $('.increase_it').click(function(e) {
        e.preventDefault();
        var inc_value = $(this).closest('.form_data').find('.pro_qty').val();
        var value = parseInt(inc_value, 10);
        value = isNaN(value) ? 0 : value;
        //alert(value);

        if(value < 10) {
            value++;
            $(this).closest('.form_data').find('.pro_qty').val(value);
        }


    });





    $('.decrease_it').click(function(e) {
    e.preventDefault();
    var inc_value = $(this).closest('.form_data').find('.pro_qty').val();
    var value = parseInt(inc_value, 10);
    value = isNaN(value) ? 0 : value;
    //alert(value);

    if(value < 10) {
        value--;
        $(this).closest('.form_data').find('.pro_qty').val(value);
    }


    });

    $('.delete_from_cart').click(function() {
        var prod_id = $(this).closest('.form_data').find('.prod_id').val();

        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });

        $.ajax({
            method: 'POST',
            url: '/delete-from-cart',
            data: {
                'prod_id': prod_id
            },

            success: function(res) {
                window.location.reload();
                swal('', res.status, 'success');
            }

        });
    });

    $('.change_qty').click(function() {
        var prod_id = $(this).closest('.form_data').find('.prod_id').val();
        var prod_qty = $(this).closest('.form_data').find('.pro_qty').val();



        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });

        data = {
            'prod_id': prod_id,
            'prod_qty': prod_qty,
        };

        $.ajax({
            method: 'POST',
            url: '/update-cart-qty',
            data: data,

            success: function(res) {
               window.location.reload();
            }

        });
    });




</script>
@endsection
