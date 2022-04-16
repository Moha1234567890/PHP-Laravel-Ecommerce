@extends('layouts.front')
@section('title')
Checkout
@endsection
@section('content')
    <div class="container mt-5 px-5">
        <div class="mb-4">
            <h2>Confirm order and pay</h2> <span>please make the payment, after that you can enjoy all the features and benefits.</span>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card-checkout p-3">
                    {{-- <h6 class="text-uppercase">Payment details</h6>
                    <div class="inputbox mt-3"> <input type="text" name="name" class="form-control" required="required"> <span>Name on card</span> </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <i class="fa fa-credit-card"></i> <span>Card Number</span> </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex flex-row">
                                <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>Expiry</span> </div>
                                <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>CVV</span> </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="mt-4 mb-4">
                        <h6 class="text-uppercase">Details</h6>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="inputbox mt-3 mr-2"> <input type="text" name="first_name" class="form-control" required="required"> <span>First Name</span> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputbox mt-3 mr-2"> <input type="text" name="last_name" class="form-control" required="required"> <span>Last Name</span> </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="inputbox mt-3 mr-2"> <input type="text" name="email" class="form-control" required="required"> <span>Email</span> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputbox mt-3 mr-2"> <input type="text" name="phone_number" class="form-control" required="required"> <span>Phone Number</span> </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="inputbox mt-3 mr-2"> <input type="text" name="address_1" class="form-control" required="required"> <span>Address 1</span> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputbox mt-3 mr-2"> <input type="text" name="address_2" class="form-control" required="required"> <span>Address 2</span> </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="inputbox mt-3 mr-2"> <input type="text" name="city" class="form-control" required="required"> <span>City</span> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputbox mt-3 mr-2"> <input type="text" name="state" class="form-control" required="required"> <span>State</span> </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="inputbox mt-3 mr-2"> <input type="text" name="country" class="form-control" required="required"> <span>Country</span> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputbox mt-3 mr-2"> <input type="text" name="pin_code" class="form-control" required="required"> <span>Pin Code</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mb-4 d-flex justify-content-between"> <span>Previous step</span> <button class="btn btn-success px-3">Pay $840</button> </div>
            </div>
            <div class="col-md-4">
                <div class="card card-blue p-3 text-white mb-3"> <span>Your cart items</span>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Qty</th>
                          </tr>
                        </thead>
                        <tbody>

                            @foreach ($cartItems as $cartItem)
                                <tr>
                                    <td>{{ $cartItem->products->name }}</td>
                                    <td>{{ $cartItem->products->selling_price }}</td>
                                    <td>{{ $cartItem->products->qty }}</td>
                                </tr>

                            @endforeach

                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection
