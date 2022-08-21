@extends('front.layout')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Search Products</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="/">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Search Products</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
<!-- =================================================================================================================== -->
<!-- showing the products from the database into the home page, it will show the products which admin add in the home page     -->
<!-- Products Start -->
<div class="">
        <div class="text-center mb-4">
            <h2 class=""><span class="px-2">Search Products</span></h2>
        </div><br>
        <div class="">

        @foreach($data as $item)
            <div class="" style="text-align: center;">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                <a href="details/{{$item['id']}}" class="cat-img position-relative overflow-hidden mb-3"> 
                       <img class="img-flui" src="{{asset('uploads/images/'. $item->image)}}" width="200px" height="200px" alt="">
                       </a>
                    </div>
        <a href="details/{{$item['id']}}">      
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-primary font-weight-bold border px-3 mr-1">{{$item->name}}</h6>
                        <h6>Price: {{$item->price}}</h6>
                        <h6 class="text-truncate mb-3">{{$item->description}}</h6>

                        <div class="d-flex justify-content-center">
                        </div>
                    </div>
</a>
                </div>
            </div>
            </a>
            @endforeach
    <!-- Products End -->
@endsection