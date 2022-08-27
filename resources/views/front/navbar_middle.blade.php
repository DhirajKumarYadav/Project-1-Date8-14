
<div class="navbar-nav w-100 overflow-hidden" style="height: 340px">
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
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">Electronic</span>Store</h1>
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
                                    <a href="/cartlist" class="dropdown-item">Shopping Cart</a>
                                    <a href="/ordernow" class="dropdown-item">Checkout</a> </div></div>
                                    <a href="contact" class="nav-item nav-link">Contact</a></div> <div class="navbar-nav ml-auto py-0">
                                    <!-- <a href="admin" class="nav-item nav-link">Login</a> -->
                                    <!-- <a href="logout" class="nav-item nav-link">Logout</a> -->

<!-- ==================================================================================================================================================================================== -->
                                    <div class="nav-item dropdown">
                                        @if(Session::has('user'))
                            <a href="#" class="nav-link" data-toggle="dropdown">{{Session::get('user')['name']}}<i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <!-- <a href="/" class="dropdown-item">Login</a> -->
                                <!-- <a href="register" class="dropdown-item">Register</a> -->
                                <a href="/logout" class="dropdown-item">Logout</a>
                                @else
                                <a href="#" class="nav-link" data-toggle="dropdown">User<i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <!-- <a href="/" class="dropdown-item">Login</a> -->
                                <a href="register" class="dropdown-item">Register</a>
                                <a href="login" class="dropdown-item">Login</a>
                            @endif
<!-- ==================================================================================================================================================================================== -->

                        </div>
                    </div>
                </nav>
            