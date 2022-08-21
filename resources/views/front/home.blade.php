{{View::make('front.topbar')}}
{{View::make('front.navbar_up')}}
<!-- =================================================== -->
<!-- this is the different class in between the layout and the layout and the home page so in home categories is always scrolled condition -->
                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
<!-- =================================================== -->
{{View::make('front.navbar_middle')}}

                <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    @foreach($data as $item)
                        <div class="carousel-item {{$item['id'] == 1 ? 'active':''}}" style="height: 410px;">
                        <a href="details/{{$item['id']}}" class="cat-img position-relative overflow-hidden mb-3"> 
                        <img class="img-fluid" src="{{asset('uploads/images/'. $item->image)}}" alt="Image">  
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">{{$item['name']}}</h3>
                                    <a href="details/{{$item['id']}}" class="btn btn-light py-2 px-3">Shop Now</a>
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
            </div>
        </div>
    </div>
    <!-- Navbar End -->  
    {{View::make('front.featured')}}
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
<!-- =================================================================================================================== -->
{{View::make('front.footer')}}