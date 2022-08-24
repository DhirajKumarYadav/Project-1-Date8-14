<div class="item{{$item['id'] == 1 ? 'active':''}}" style="height: 410px;">
                            <img src="{{$item['image']}}" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">{{$item['name']}}</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">{{$item['description']}}</h3>
                                    <a href="" class="btn btn-light py-2 px-3">Shop Now</a>
                                </div>
                            </div>
                        </div>









                        <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Dresses <i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">Men's Dresses</a>
                                <a href="" class="dropdown-item">Women's Dresses</a>
                                <a href="" class="dropdown-item">Baby's Dresses</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Shirts</a>
                        <a href="" class="nav-item nav-link">Jeans</a>
                        <a href="" class="nav-item nav-link">Swimwear</a>
                        <a href="" class="nav-item nav-link">Sleepwear</a>
                        <a href="" class="nav-item nav-link">Sportswear</a>
                        <a href="" class="nav-item nav-link">Jumpsuits</a>
                        <a href="" class="nav-item nav-link">Blazers</a>
                        <a href="" class="nav-item nav-link">Jackets</a>
                        <a href="" class="nav-item nav-link">Shoes</a>
                    </div>
                </nav>
            </div>










            @foreach($data as $item)
                <!-- <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0"> -->
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0 {{$item['id'] == 1 ? 'active':''}}">
                        <div class="trending" style="float:left;">
                <a href="Charger" class="cat-img position-relative overflow-hidden mb-3"> 
                    <img class="img-flui" src="{{asset('uploads/images/'. $item->image)}}" width="300px" height="300px" alt="Image">
                </a>
                    </div>
                    </div>

                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">{{$item['name']}}</h6>
                        <div class="d-flex justify-content-center">
                            <h6>{{$item['price']}}</h6><h6 class="text-muted ml-2"><del>{{$item['mrp']}}</del></h6>
                        </div>
                    </div>

                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="Charger" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                    </div>
                    <br>
                    @endforeach







                    <!-- Footer Start -->
   <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">E</span>Shopper</h1>
                </a>
                <p>Dolore erat dolor sit lorem vero amet. Sed sit lorem magna, ipsum no sit erat lorem et magna ipsum dolore amet erat.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                    <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="/"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="shop"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-dark mb-2" href="shopdetail"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-dark mb-2" href="cart"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-dark mb-2" href="checkout"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-dark" href="contact"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="/"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="shop"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-dark mb-2" href="shopdetail"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-dark mb-2" href="cart"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-dark mb-2" href="checkout"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-dark" href="contact"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 py-4" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 py-4" placeholder="Your Email"
                                    required="required" />
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
            <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">Dhiraj-1 Site</a>. All Rights Reserved. Designed
                    by
                    <a class="text-dark font-weight-semi-bold" href="https://htmlcodex.com">Developer Dhiraj</a><br>
                    Distributed By <a href="https://themewagon.com" target="_blank">Dhiraj</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>










<div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Laptops <i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                 <a href="dell_laptop" class="dropdown-item">DELL</a>
                                 <a href="apple_laptop" class="dropdown-item">APPLE</a>
                                 <a href="asus_laptop" class="dropdown-item">ASUS</a>
                            </div>
                        </div>
                        <a href="mobiles" class="nav-item nav-link">Mobiles</a>
                        <a href="home/Charger" class="nav-item nav-link">Charger</a>
                        <a href="Camera" class="nav-item nav-link">Camera</a>
                        <a href="Powerbank" class="nav-item nav-link">Powerbank</a>
                        <a href="Mouse" class="nav-item nav-link">Mouse</a>
                        <a href="Smartwearable" class="nav-item nav-link">Smartwearable</a>
                        <a href="Speakers" class="nav-item nav-link">Speakers</a>
                        <a href="Headphones" class="nav-item nav-link">Headphones</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                        <a href="/" class="nav-item nav-link">Home</a>
                                    <a href="shop" class="nav-item nav-link active">Shop</a>
                                    <a href="shopdetail" class="nav-item nav-link">Shop Detail</a><div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a> <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout" class="dropdown-item">Checkout</a> </div></div>
                                    <a href="contact" class="nav-item nav-link">Contact</a></div> <div class="navbar-nav ml-auto py-0">
                                    <!-- <a href="admin" class="nav-item nav-link">Login</a> -->
                                    <!-- <a href="logout" class="nav-item nav-link">Logout</a> -->
                                    <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">User<i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <!-- <a href="/" class="dropdown-item">Login</a> -->
                                <a href="register" class="dropdown-item">Register</a>
                                <a href="login" class="dropdown-item">Login</a>
                        </div>
                    </div>
                </nav>






                function showdata($id){
    $data= Member::find($id);
 return view('edit',['data'=>$data]);
}

















<!-- =================================================================================================================== -->
<!-- showing the products from the database into the home page, it will show the products which admin add in the home page     -->
<!-- Products Start -->
<div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Trending Products</span></h2>
        </div><br>
        <div class="row px-xl-5 pb-3">

        @foreach($data as $item)
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                <a href="details/{{$item['id']}}" class="cat-img position-relative overflow-hidden mb-3"> 
                       <img class="img-flui" src="{{asset('uploads/images/'. $item->image)}}" width="300px" height="300px" alt="">
                       </a>
                    </div>
        <a href="details/{{$item['id']}}">      
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">{{$item->name}}</h6>
                        <div class="d-flex justify-content-center">
                            <h6>{{$item->price}}</h6><h6 class="text-muted ml-2"><del>{{$item->mrp}}</del></h6>
                        </div>
                    </div>
</a>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                    </div>
                </div>
            </div>
            </a>
            @endforeach
    <!-- Products End -->





    @extends('front.layout')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Cart Products</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="/">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Cart Products</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
<!-- =================================================================================================================== -->
<!-- showing the products from the database into the home page, it will show the products which admin add in the home page     -->
<!-- Products Start -->
<div class="">
        <div class="text-center mb-4">
            <h2 class=""><span class="px-2">Your Cart Products</span></h2>
        </div><br>
        <div class="">

        @foreach($products as $item)
            <div class="col-sm-10" style="text-align: center;">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                <a href="details/{{$item->id}}" class="cat-img position-relative overflow-hidden mb-3"> 
                       <img class="img-flui" src="{{asset('uploads/images/'. $item->image)}}" width="200px" height="200px" alt="">
                       </a>
                    </div>
        <a href="details/{{$item->id}}">      
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











<!-- showing the products from the database into the home page, it will show the products which admin add in the home page     -->
<!-- Products Start -->
<div class="">
        <div class="text-center mb-4">
            <!-- <h2 class=""><span class="px-2">Search Products</span></h2> -->
            <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">Search Products</span></h1>

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









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronic Store</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<!-- <link href="css/style.css" rel="stylesheet"> -->

</head>

<body>
    
<div class="container">
<div class="row">
<div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2" >Products Detail</span></h2>
        </div><br>
<div class="col-sm-8">
<img class="img-flui" style="align:center;" src="{{asset('uploads/images/'. $data['image'])}}"  width="300px" height="300px" alt="" alt="Image">
</div class="left">
<div class="col-sm-7">
    <a href="/" class="btn btn-primary">Go Back</a>
    <h2 >Name: {{$data['name']}}</h2>
    <h4 class="nav-item nav-link">Price: {{$data['price']}}</h4><br>
    <h4  class="nav-item nav-link">Category: {{$data['category']}}</h4><br>
    <h4  class="nav-item nav-link">Description: {{$data['description']}}</h4>

    <br>
   <!-- <a href="details/{{$data['id']}}" class="btn btn-primary">View Detail</a> -->
<form action="/add_to_cart" method="post">
    @csrf
    <input type="hidden" name="product_id" value="{{$data['id']}}">
<button class="btn btn-primary">Add to Cart</button> 

</form>
   <br> <br>
   <button class="btn btn-success">Buy Now</button> 
   <br>
   </div>

</div>
</div>
</div>

</body>
<style>
.col-sm-6{
    margin: 20px;
    float:left;

}
.left{
    float:left;
    width:20%;
}


</style>
</html>














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
<div class="custom-product">
        <div class="trending-wrapper" style="padding: 40px;">
        <div class="text-center mb-4">
            <!-- <h2 class=""><span class="px-2">Search Products</span></h2> -->
            <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">Search Products</span></h1>

        </div>
            <!-- <h2>Your Cart Products</h2> -->
            <br>
            <br>
             @foreach($data as $item)
            <div class="row searched-item list-divider" style="padding: 40px;">
                <div class="col-sm-3">
                       <img src="{{asset('uploads/images/'. $data['image'])}}" width="200x" height="200px"  alt="">
                </div>

                <div class="col-sm-4">
                    <div class=""><br>
                        <h2>Name: {{$data['name']}}</h2>
                        <h6>Price: {{$data['price']}}</h6><del>{{$data['mrp']}}</del></h6>
                        <h6>Description: {{$data['description']}}</h6>
                    </div>
                </div>
                
                <div class="col-sm-2"><br><br><br>
                <form action="/add_to_cart" method="post">
                           @csrf
                                 <input type="hidden" name="product_id" value="{{$data['id']}}">
                                <!-- <button class="btn btn-primary">Add to Cart</button>  -->
                                <button class="btn btn-warning">Add To Cart</button>
                        </form>

                   <!-- <button >Add to Cart</button> -->
                </div>
            </div>
            @endforeach

        </div>
</div>
@endsection