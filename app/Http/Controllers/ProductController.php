<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;

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
public function productDetails(Request $req,$id)
{

    $data=Product::find($id);
    //in this session im putting the all data of that product id. and retrieving the data from the session 
    //the function placeOrderNow 
    $req->session()->put('pid',$data);

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
    //this if condition checks whether there is any user or not if not then the person has to login or register
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
public function cartList(Request $req)
{
    if($req->session()->has('user'))
{
     $userId=Session::get('user')['id'];
     $products = DB::table('cart')
     ->join('products','cart.product_id','=','products.id')
     ->where('cart.user_id',$userId)
     ->select('products.*','cart.id as cart_id')
     ->get();
     return view('front.cartlist',['products'=>$products]);
}
else
{
    return redirect('/login');
}
}
//========================================================================================
public function removeCart($id)
{
    Cart::destroy($id);
    return redirect('cartlist');
}
//========================================================================================
public function orderNow(Request $req)
{
    if($req->session()->has('user'))
    {
 $userId= Session::get('user')['id'];
 $total= DB::table('cart')
->join('products','cart.product_id','=','products.id')    
->where('cart.user_id',$userId)
->sum('products.price');
return view('front.ordernow',['total'=>$total]);
    }else{
        return redirect('/login');
    }
}
//========================================================================================
public function buyNow(Request $req)
{
    if($req->session()->has('user'))
    {
$userId= Session::get('user')['id'];
$total=$req->price;
return view('front.placeOrderNow',['total'=>$total]);
}
else
{
return redirect('/login');
}}
//========================================================================================
public function PlaceOrderNow(Request $req)
{
     $req->input();
     //this session is retrueving the data details page product 
     $ProductId= Session::get('pid')['id'];
     $userId=Session::get('user')['id'];

     $order =new Order;
    $order->product_id=$ProductId;
    $order->user_id=$userId;
    $order->status="pending";
    $order->payment_status="pending";
    $order->payment_method=$req->payment;
    $order->fullname=$req->fullname;
    $order->mobileno=$req->mobile;
    $order->country=$req->country;
    $order->city=$req->city;
    $order->state=$req->state;
    $order->zipcode=$req->zipcode;
    $order->save();
    
    return redirect('/');
}
//========================================================================================
public function PlaceOrder(Request $req)
{
    $req->input();
    $userId=Session::get('user')['id'];
    $allCart=Cart::where('user_id',$userId)->get();
// we need to save the data in the product table and remove the data from the cart table
    foreach($allCart as $Cart)
{
    $order =new Order;
    $order->product_id=$Cart['product_id'];
    $order->user_id=$Cart['user_id'];
    $order->status="pending";
    $order->payment_status="pending";
    $order->payment_method=$req->payment;
    $order->fullname=$req->fullname;
    $order->mobileno=$req->mobile;
    $order->country=$req->country;
    $order->city=$req->city;
    $order->state=$req->state;
    $order->zipcode=$req->zipcode;
    $order->save();

    Cart::where('user_id',$userId)->delete();
}

 $req->input();
return redirect('/');
}
//========================================================================================
public function MyOrders(Request $req)
{
    if($req->session()->has('user'))
    {
    $userId= Session::get('user')['id'];
    $myorders= DB::table('orders')
   ->join('products','orders.product_id','=','products.id')    
   ->where('orders.user_id',$userId)
   ->get();
   return view('front.myOrders',['myorders'=>$myorders]);
    }else{
        return redirect('/login');
    }
}


//========================================================================================



}
