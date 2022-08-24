@extends('front.layout')
@section('content')
<!-- Page Header Start -->
<!-- <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Cart Products</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="/">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Cart Products</p>
            </div>
        </div>
    </div> -->
    <!-- Page Header End -->
<!-- =================================================================================================================== -->
<!-- showing the products from the database into the home page, it will show the products which admin add in the home page     -->
<!-- Products Start -->
<div class="custom-product">
        <div class="trending-wrapper" style="padding: 40px;">
      
        <div class="text-center mb-4">
            <!-- <h2 class=""><span class="px-2">Your Cart Products</span></h2> -->
            <h1 class="m-0 display-5 font-weight-semi-bold">
            <span class="text-primary font-weight-bold border px-3 mr-1">Your Cart Products</span></h1>
            <br>
            <a href="/ordernow" class="btn btn-success">Buy Now</a>
            <!-- <button class="btn btn-success">Buy Now</button>  -->
        </div>
            <br>
             @foreach($products as $item)

            <div class="row searched-item list-divider" style="padding: 40px;">
                <div class="col-sm-3">
                   <a href="details/{{$item->id}}"> 
                       <img src="{{asset('uploads/images/'. $item->image)}}" width="200x" height="200px"  alt="">
                    </a>
                </div>

                <div class="col-sm-4">
                    <div class=""><br>
                        <h2>{{$item->name}}</h2>
                        <h6>Rs: {{$item->price}}</h6><del>{{$item->mrp}}</del></h6>
                        <h6>{{$item->description}}</h6>
                    </div>
                </div>
                
                <div class="col-sm-2">
                    <br><br><br>
                   <a href="/removecart/{{$item->cart_id}}"class="btn btn-warning">Remove from Cart</a>
                </div>
            </div>
            @endforeach
            <br>
            <br>
        <div class="text-center mb-4">
            <a href="/ordernow" class="btn btn-success">Buy Now</a>

        </div>
        </div>
</div>
@endsection