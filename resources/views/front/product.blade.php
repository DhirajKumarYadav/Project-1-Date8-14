<html>
    <head>
        <body>
<div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    @foreach($data as $item)
                        <div class="carousel-item {{$item['id'] == 1 ? 'active':''}}" style="height: 410px;">
                        <a href="details/{{$item['id']}}">   
                        <img class="img-fluid" src="{{asset('uploads/images/'. $item->image)}}" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">{{$item['name']}}</h3>
                                    <a href="" class="btn btn-light py-2 px-3">Shop Now</a>
                                </div>
                            </div>
                        </a>
                        </div>
                        @endforeach      
                         
                    </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
</body>
</head>
</html>