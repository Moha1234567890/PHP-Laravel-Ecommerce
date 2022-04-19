@extends('layouts.admin')
@section('title')
Orders for admin
@endsection

@section('content')
<div class="container mt-3 px-5">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>My orders</h4>

                    <a class="btn btn-primary pull-right mt-0" href="{{ route('history.orders.admin') }}"> orders history</a>
                </div>
                <div class="card-body">
                    <table class="table">

                        <thead>
                        <tr>
                            <th scope="col">Date</th>

                            <th scope="col">Tracking No</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($myOrders as $myOrder)
                                <tr>
                                    <td>{{ date('d-m-Y', strtotime($myOrder->created_at))}}</td>

                                    <td>{{ $myOrder->tracking_no }}</td>

                                    <td>{{ $myOrder->total_price }}</td>
                                    <td>{{ $myOrder->status == '0' ? 'pending' : 'completed' }}</td>
                                    <td><a href="{{ route('single.order.admin', $myOrder->id) }}" class="btn btn-primary">view</a></td>
                                </tr>




                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

