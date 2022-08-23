<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Session;

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
//========================================================================================
public function addToCart(Request $req)
{
    if($req->session()->has('user'))
    {
        $cart= new Cart;
        $cart->user_id=$req->session()->get('user')['id'];
        $cart->product_id=$req->product_id;
        $cart->save();
        return redirect('/');
    }else{
        return redirect('/login');
    }
}
//========================================================================================
//we are using the static function so we can remove the error like  Non static function can not be used statically
 static function cartItem()
 {
    $userId=Session::get('user')['id'];
      return Cart::where('user_id',$userId)->count();
 }
//========================================================================================

}
