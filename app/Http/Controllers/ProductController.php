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
public function storeProduct(Request $req)
{
//     echo "<pre>";
// print_r($req->all());
$data = new Product;
$data->name=$req->input('name');
$data->mrp=$req->input('mrp');
$data->price=$req->input('price');
$data->category=$req->input('category');
$data->description=$req->input('description');
$data->image=$req->input('image');
 $data->save();
return redirect('admin');
}
//========================================================================================


}
