@extends('layouts.front')
@section('title')
Single User
@endsection
@section('content')
<div class="container mt-3 px-5">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>User Details</h4>
                    <a href="{{ route('all.users') }}" class="btn btn-warning pull-right text-white">Back</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            <label>Role</label>
                            <div class="border p-2">{{ $user->role_as == '0' ? 'User' : 'Admin' }}</div>

                            <label>First Name</label>
                            <div class="border p-2">{{ $user->fname }}</div>

                            <label>Last Name</label>
                            <div class="border p-2">{{ $user->lname }}</div>

                            <label>Email</label>
                            <div class="border p-2">{{ $user->email }}</div>

                            <label>Contact No</label>
                            <div class="border p-2">{{ $user->phone }}</div>

                        </div>
                        <div class="col-md-6">
                            <label>Address 1</label>
                            <div class="border p-2">{{ $user->address_1 }}</div>

                            <label>Address 2</label>
                            <div class="border p-2">{{ $user->address_2 }}</div>

                            <label>Zip Code</label>
                            <div class="border p-2">{{ $user->pincode }}</div>

                            <label>City</label>
                            <div class="border p-2">{{ $user->city }}</div>

                            <label>state</label>
                            <div class="border p-2">{{ $user->state }}</div>
                        </div>


                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
