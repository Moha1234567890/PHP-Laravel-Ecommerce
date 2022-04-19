@extends('layouts.admin')
@section('title')
Users
@endsection

@section('content')
<div class="container mt-3 px-5">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Users</h4>

                </div>
                <div class="card-body">
                    <table class="table">

                        <thead>
                        <tr>
                            <th scope="col">Id</th>

                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>

                                    <td>{{ $user->name }}</td>

                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td><a href="{{ route('user.details', $user->id) }}" class="btn btn-primary">view</a></td>
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

