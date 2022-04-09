@extends('layouts.front')
@section('title')
{{ $category->name }}
@endsection
@section('content')



<div class="py-5">
    <div class="container">
        <div class="row">
                <div class="col-md-12">
                    <h2>{{ $category->name }}</h2>
                </div>
            
                @foreach ($product as $featuredProduct)
                    <div class="col-md-4">
                        <a href="{{ route('single.product', [$category->slug,  $featuredProduct->slug]) }}">

                                    <div class="card">
                                        <img src="{{ asset('assets/uploads/product/'. $featuredProduct->image) }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $featuredProduct->name }}</h5>
                                            <span class="float-star">{{ $featuredProduct->selling_price }}</span>
                                            <span class="float-end">{{ $featuredProduct->original_price }}</span>
                                        </div>
                                    </div>
                        </a>
                    </div>
                @endforeach

        </div>
    </div>
</div>

@endsection