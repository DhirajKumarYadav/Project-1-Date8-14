@extends('front.layout')
@section('content')

<!-- showing the products from the database into the home page, it will show the products which admin add in the home page     -->
<!-- Products Start -->
<div class="custom-product">
        <div class="trending-wrapper" style="padding: 40px;">
      
        <div class="text-center mb-4">
            <!-- <h2 class=""><span class="px-2">Your Cart Products</span></h2> -->
            <h1 class="m-0 display-5 font-weight-semi-bold">
            <span class="text-primary font-weight-bold border px-3 mr-1">My Orders</span></h1>
            <br>
            <!-- <a href="/ordernow" class="btn btn-success">Buy Now</a> -->
            <!-- <button class="btn btn-success">Buy Now</button>  -->
        </div>
            <br>
       <table>
            @foreach($myorders as $item)
<ol>
            <div class="row searched-item list-divider" style="padding: 40px;">
                <div class="col-sm-3">
                   <a href="details/{{$item->id}}"> 
                       <img src="{{asset('uploads/images/'. $item->image)}}" width="200x" height="200px"  alt="">
                    </a>
                </div>

                <div class="col-sm-6">
                    <div class=""><br>
                        <h2>{{$item->name}}</h2>
                        <h6><b>Price :</b> {{$item->price}}</h6>Mrp : <del> {{$item->mrp}}</del></h6>
                        <h6><b>Address :</b> {{$item->city}}</h6>
                        <h6><b>Payment Method :</b> {{$item->payment_method}}</h6>
                        <h6><b>Delivery Status :</b> {{$item->status}}</h6>
                        <h6><b>Payment Status :</b> {{$item->payment_status}}</h6>
                        <!-- <h6><b>Description :</b> {{$item->description}}</h6> -->
                    </div>
                </div>
                
            
            </div>
</ol>
            @endforeach
</table>    
            <br>
            <br>
        <!-- <div class="text-center mb-4"> -->
            <!-- <a href="/ordernow" class="btn btn-success">Buy Now</a> -->

        <!-- </div> -->
        </div>
</div>
@endsection