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
<div class="col-sm-6">
<img class="img-flui" src="{{asset('uploads/images/'. $data['image'])}}"  width="300px" height="300px" alt="" alt="Image">
</div class="left">
<div class="col-sm-6">
    <a href="/" class="btn btn-primary">Go Back</a>
    <h2 >Name: {{$data['name']}}</h2>
    <h4 class="btn btn-sm text-dark p-10">Price: {{$data['price']}}</h4><br>
    <h4 class="btn btn-sm text-dark p-10">Category: {{$data['category']}}</h4><br>
    <h4 class="btn btn-sm text-dark p-10">Description: {{$data['description']}}</h4>

   <br> <br>
   <button class="btn btn-primary">Add to Cart</button> 
   <br> <br>
   <button class="btn btn-success">Buy Now</button> 
   <br> <br>
   </div>

</div>
</div>
</div>

</body>
<style>
.col-sm-6{
    margin: 20px;
}
.left{
    float:left;
    width:20%;
}


</style>
</html>