@extends('admin/layout')
@section('container')
<h1 class="mb10">Manage Product</h1>
        <a href="{{url('admin/addproduct')}}">
             <button type="button" class="btn btn-success">Back</button>
        </a>
<div class="row m-t-30">
@if(session('status'))
                <h2> {{session('status')}}</h2>
                @endif
   <div class="col-md-12">
        
        <form action="addproduct" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name" class="control-label mb-1"> Name</label>
                            <input id="name" value="" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                        </div>
                        <div class="form-group">
                              <label for="mrp" class="control-label mb-1"> MRP</label>
                              <input id="mrp" name="mrp" type="text" class="form-control" aria-required="true" aria-invalid="false" value="" required>
                        </div>
                        <div class="form-group">
                              <label for="price" class="control-label mb-1"> Price</label>
                              <input id="price" name="price" type="text" class="form-control" aria-required="true" aria-invalid="false" value="" required>
                        </div>
                        <div class="form-group">
                                <label for="desc" class="control-label mb-1"> Category</label>
                                <input id="category" name="category" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                        </div>
                        <div class="form-group">
                                <label for="desc" class="control-label mb-1"> Description</label>
                                <textarea id="desc" name="description" type="text" class="form-control" aria-required="true" aria-invalid="false" required></textarea>
                        </div>
                        <div class="form-group">
                                <label for="image" class="control-label mb-1"> Image</label>
                                <input id="image" name="image" type="file" class="form-control" aria-required="true" aria-invalid="false" >
                        </div>
                    </div>
               </div>
            </div>
        <div>
            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
            Submit
            </button>
        </div>
      </form>
   </div>
</div>
@endsection