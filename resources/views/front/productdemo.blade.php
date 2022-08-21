<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronic Store</title>
</head>
<body>
    
<div class="container">
<div class="row">
<div class="col-sm-6">
<img class="img-fluid" src="{{asset('uploads/images/'. $item['image']}}" alt="Image">
</div>
<div class="col-sm-6">
    <a href="/">Go Back</a>
    <h2>{{$item['name']}}</h2>
    <h3>{{$item['price']}}</h3>
    <h4>{{$item['category']}}</h4>
    <h5>{{$item['description']}}</h5>
   <br> <br>
   <button class="btn btn-primary">Add to Cart<button> 
   <br> <br>

   <button class="btn btn-primary">Buy Now<button> 
   <br> <br>

</div>
</div>
</div>

</body>
</html>
