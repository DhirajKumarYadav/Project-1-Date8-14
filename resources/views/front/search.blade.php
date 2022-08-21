@extends('front.layout')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shop Detail</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shop Detail</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <div class="custom-product">
        <div class="col-sm-4"> <a href="#">Filter</a></div>
<div class="col-sm-4">
<h2 class="section-title px-5"><span class="px-2">Trending Products</span></h2>

     <div class="trending-wrapper">
               @foreach($data as $item)
               <div class="searched-item">
                    <a href="detail/{{$item['id']}}">
                       <img class="img-flui" src="{{asset('uploads/images/'. $item->image)}}" width="200px" height="200px" alt="">
                            <div class="">
                                 <b class="text-primary font-weight-bold border mr-1">{{$item['name']}}</b><br>
                                 <h2 class="btn btn-sm text-dark p-0">{{$item['description']}}</h2>
                            </div>
                    </a>
               </div>
              @endforeach
     </div>
</div>
</div>
@endsection
