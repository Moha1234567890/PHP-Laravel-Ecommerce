@extends('layouts.front')
@section('title')
Single Order
@endsection
@section('content')
<div class="container mt-3 px-5">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Single order</h4>
                    <a href="{{ route('user.myorders') }}" class="btn btn-warning pull-right text-white">Back</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Shipping details</h2>
                            <label>First Name</label>
                            <div class="border p-2">{{ $orders->fname }}</div>

                            <label>Last Name</label>
                            <div class="border p-2">{{ $orders->lname }}</div>

                            <label>Email</label>
                            <div class="border p-2">{{ $orders->email }}</div>

                            <label>Contact No</label>
                            <div class="border p-2">{{ $orders->phone }}</div>

                            <label>Shipping Address</label>
                            <div class="border p-2">
                                {{ $orders->address_1 }},
                                {{ $orders->address_2 }},
                                {{ $orders->city }},
                                {{ $orders->state }},
                                {{ $orders->country }},
                            </div>

                            <label>Zip Code</label>
                            <div class="border p-2">{{ $orders->pincode }}</div>

                        </div>
                        <div class="col-md-6">
                            <h2>Order details</h2>
                              <table class="table">

                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Image</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders->orderItems as $orderItem)
                                        <tr>
                                            <td>{{ $orderItem->products->name }}</td>

                                            <td>{{ $orderItem->qty }}</td>
                                            <td>{{ $orderItem->price }}</td>
                                            <td>
                                                <img src="{{ asset('assets/uploads/product/'. $orderItem->products->image) }}" class="card-img-top" width="50" height="50" alt="...">
                                            </td>
                                        </tr>




                                    @endforeach

                                </tbody>
                            </table>
                            <h3 >Grand Total: ${{ $orders->total_price }}</h3>
                                <form action="{{ route('update.single.order', $orders->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <label>Order Status</label>
                                    <select name="select_status" class="form-select mb-4 custom-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>

                                        <option {{ $orders->status == '0' ? 'selected' : '' }} value="0">pending</option>
                                        <option {{ $orders->status == '1' ? 'selected' : '' }} value="1">completed</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary">submit</button>
                                </form>
                        </div>


                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
