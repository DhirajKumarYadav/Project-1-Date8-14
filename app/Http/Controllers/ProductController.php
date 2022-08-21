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
if($req->hasfile('image'))
{
    $file= $req->file('image');
    $extension=$file->getClientOriginalExtension();
    $filename=time().'.'.$extension;
    $file->move('uploads/images/',$filename);
    $data->image=$filename;
}
 $data->save();
return redirect('admin/addproduct')->with('status','successfully product added!!! ');
}
//========================================================================================
public function showProduct()
{
    $data= Product::all();
    return view('front.home',compact('data'));
}
//========================================================================================
public function productDetails($id)
{
    $data=Product::find($id);
    return view('front.detail',compact('data'));
}
//========================================================================================
public function searchProducts(Request $req)
{
     $data=Product::where('name' , 'like' , '%'. $req->input('query') . '%')->get();
     return view('front.searched',['data'=>$data]);
}
}
