<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
//========================================================================================
    public function addProduct()
    {
return view('admin.add_product');
    }
//========================================================================================
public function newProduct(Request $req)
{

}

}
