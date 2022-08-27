@extends('front.layout')
@section('content')
        <div class="container-fluid pt-5">
            <div class="text-center mb-4">
                 <h1 class="m-0 display-5 font-weight-semi-bold">
                 <span class="text-primary font-weight-bold border px-3 mr-1" style="border:orange; border-width:3px; border-style:solid;">Payment Detail</span></h1>
                 <br>
            </div>
        </div> 
        
            <div class="" style="padding: 5px 400px 20px; ">
                <div class="card border-secondary mb-5" style="border:orange; border-width:3px; border-style:solid;">
                       <div class="card-header bg-secondary" style="border:orange; border-width:3px; border-style:solid;">
                           <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                       </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="font-weight-medium mb-3">Amount</h5>
                            <h6 class="font-weight-medium">Rs: {{$total}}</h6>
                        </div>
                        <hr class="mt-0">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Tax</h6>
                            <h6 class="font-weight-medium">Rs: 0</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">Rs: 50</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">Rs: {{$total+50}}</h5>
                        </div>
                    </div>
                </div>
            </div>
                <br>
                <br>
                <br>
                <br>
               
               
               
<div class="" style="padding: 5px 400px 20px; ">
    <div class="card border-secondary mb-5" style="border:orange; border-width:3px; border-style:solid;">
        <form action="/place_order" method="post" style="border:orange; border-width:3px; border-style:solid;">
                         @csrf
            <div class="container-fluid pt-5">
                <div class="row px-xl-5">
                    <div class="mb-4" style="padding: 10px;">
                           <h4 class="font-weight-semi-bold mb-4"  style="text-align:center">Billing Address</h4>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Full Name</label>
                                <input class="form-control" type="name" name="fullname" placeholder="Enter Name">
                            </div>
                            <!-- <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="email" name="email" placeholder="Enter Email">
                            </div> -->
                            <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" type="text" name="mobile" placeholder="Enter Phone No.">
                            </div>
                            <div class="col-md-6 form-group">
                            <label>Country</label>
                            <select class="custom-select" name="country">
                                <option selected>India</option>
                                <option>Nepal</option>
                                <option>USA</option>
                                <option>Japan</option>
                            </select>
                            </div>
                            <div class="col-md-6 form-group">
                            <label>City</label>
                            <input class="form-control" type="text" name="city" placeholder="New York">
                            </div>
                            <div class="col-md-6 form-group">
                            <label>State</label>
                            <input class="form-control" type="text" name="state" placeholder="New York">
                            </div>
                            <!-- <div class="col-md-6 form-group">
                            <label>Street</label>
                            <input class="form-control" type="text" name="street" placeholder="New York">
                            </div> -->
                            <div class="col-md-6 form-group">
                            <label>ZIP Code</label>
                            <input class="form-control" type="text" name="zipcode" placeholder="123">
                            </div>
                        </div>
                    </div>
                </div>
                    <br><br>
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Payment</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" value="Paytm" class="custom-control-input" name="payment" id="Paytm">
                                <label class="custom-control-label" for="Paytm">Paytm</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" value="Emi_Payment" class="custom-control-input" name="payment" id="emi_payment">
                                <label class="custom-control-label" for="emi_payment">EMI Payment</label>
                            </div>
                        </div>
                        <div class="">
                            <div class="custom-control custom-radio">
                                <input type="radio" value="Cash On Delivery" class="custom-control-input" name="payment" id="cash_on_delivery">
                                <label class="custom-control-label" for="cash_on_delivery">Cash on Delivery</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <button class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3" type="submit">Place Order</button>
                    </div>
                </div>
            </div>
    </div>
</div>
    <!-- Checkout End -->

@endsection