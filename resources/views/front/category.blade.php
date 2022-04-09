@extends('layouts.front')
@section('title')
 category
@endsection
@section('content')



<div class="py-5">
    <div class="container">
        <div class="row">
            <h3>featured categories</h3>
            <div class="owl-carousel featured-carousel owl-theme">
                @foreach ($featuredCategories as $featuredCategory)
                 <div class="item">
                     <a href="{{ route('category.products', $featuredCategory->slug) }}">
                        <div class="card">
                            <img src="{{ asset('assets/uploads/category/'. $featuredCategory->image) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $featuredCategory->name }}</h5>
                              <p>
                                  {{ $featuredCategory->description }}
                              </p>
                            </div>
                        </div>
                     </a>
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