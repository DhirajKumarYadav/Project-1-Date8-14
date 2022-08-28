
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
    
<div class="custom-product">
        <div class="trending-wrapper" style="padding: 40px;">
        <div class="text-center mb-4">
            <!-- <h2 class=""><span class="px-2">Product Details</span></h2> --><br>

            <h1 class="m-0 display-5 font-weight-semi-bold"><b>Product Details</b></h1>

        </div>
            <!-- <h2>Your Cart Products</h2> -->
            <br>
            <br>

            <div class="row searched-item list-divider" style="padding: 40px;">
                <div class="col-sm-4">
                       <img src="{{asset('uploads/images/'. $data['image'])}}" width="350px" height="350px"  alt="">
                </div>

                <div class="col-sm-4">
                    <div class=""><br>
                        <h2>Name: {{$data['name']}}</h2><br>
                        <h5>Price: {{$data['price']}}</h5>Mrp: <del>{{$data['mrp']}}</del></h6><br><br>
                        <h5>Description: {{$data['description']}}</h5>
                    </div><br><br><br>
                    <a href="/" class="btn btn-primary"  style='margin-right:80px'>Go Back</a>
                    <a href="/cartlist" class="btn btn-primary">Cart List</a>
                    
                </div>
                
                <div class="col-sm-4" style="padding-left: 90px;"><br><br><br>

                <form action="/add_to_cart" method="post">
                           @csrf
                                 <input type="hidden" name="product_id" value="{{$data['id']}}">
                                <!-- <button class="btn btn-primary">Add to Cart</button>  -->
                                <button class="btn btn-warning">Add To Cart</button>
                        </form>

                        
                           <!-- <br> <br><br>    
                             <a href="/buynow/{{$data['id']}}" class="btn btn-success">Buy Now</a> 
                                   <br> -->
                <form action="/buynow" method="post">
                           @csrf
                                 <input type="hidden" name="price" value="{{$data['price']}}">
                                 <br> <br><br>
                                 <button class="btn btn-success">Buy Now</button>
                                 <br>
                          </form>


                   <!-- <button >Add to Cart</button> -->
                </div>
            </div>


        </div>
</div>
</body>
</html>