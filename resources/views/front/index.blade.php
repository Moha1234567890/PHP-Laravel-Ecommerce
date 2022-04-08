@extends('layouts.front')
@section('title')
 home
@endsection
@section('content')

@include('layouts.inc.frontslider')


<div class="py-5">
    <div class="container">
        <div class="row">
            <h3>featured products</h3>
            <div class="owl-carousel featured-carousel owl-theme">
                @foreach ($featuredProducts as $featuredProduct)
                 <div class="item">
             

                        <div class="card">
                            <img src="{{ asset('assets/uploads/product/'. $featuredProduct->image) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $featuredProduct->name }}</h5>
                                <span class="float-star">{{ $featuredProduct->selling_price }}</span>
                                <span class="float-end">{{ $featuredProduct->original_price }}</span>
                            </div>
                        </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    </div>
@endsection




@section('scripts')
<script>
    $('.featured-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })
</script>
@endsection