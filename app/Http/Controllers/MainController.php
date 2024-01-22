<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\Save;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Exceptions\LivewirePageExpiredBecauseNewDeploymentHasSignificantEnoughChanges;
use Pest\Support\Arr;
use PhpParser\Node\Expr\Cast\Array_;
use Psy\Command\WhereamiCommand;

class MainController extends Controller
{
    public function dashboard(){
        $usertype = auth()->user()->user_type;
        if($usertype == 1){
            return view("admin.home");
        }else{

        $products = Product::paginate(3);
            return view("home.index" ,compact('products'));
        }
    }







    public function indexHomeProduct(){

        $products = Product::paginate(3);

        return view('home.index' , compact('products'));
    }



    public function productDesc($id){

        $product = Product::findOrFail($id);

        return view('home.product-desc',compact('product'));


    }


    public function productDescription($id){

        $product = Save::findOrFail($id);

        return view('home.product-desc',compact('product'));


    }


    public function addToCart(Request $request ,$id){

        if(Auth::check()){
            $product = Product::findOrFail($id);
            $user = Auth::user();
            $price="";
            if($product->discount_price==NULL){
                $price = $product->price;
            }else{
                $price = $product->discount_price;
            }

            $total_price = $request->quantity*$price;
            Cart::create([
                'product_id'=>$product->id,
                'user_id'=>$user->id,
                'user_name'=>$user->name,
                'email'=>$user->email,
                'phone'=>$user->phone,
                'address'=>$user->address,
                'product_name'=>$product->name,
                'img'=>$product->img,
                'price'=>$price,
                'total_price'=>$total_price,
                'quantity'=>$request->quantity

            ]);

            return redirect()->route('IndexCart');
        }else{
            return redirect()->route('login')->with('message','You need to enter the site to order the product');
        }
    }

    public function IndexCart(){
        $user = Auth::user();
        $carts = Cart::all();
        $carts = DB::table('carts')->where('email' , $user->email)->get();

        return view('home.cart-view-prodcut', compact('carts'));





    }
    public function addToOrder(){
        $user = Auth::user();
        $orders = Cart::all();
        $orders = DB::table('carts')->where('email' , $user->email)->get();
foreach($orders as $order){
    Order::create([
        'user_id'=>$order->user_id,
        'product_id'=>$order->product_id,
        'user_name'=>$order->user_name,
        'user_address'=>$order->address,
        'user_email'=>$order->email,
        'user_phone'=>$order->phone,
        'product_name'=>$order->product_name,
        'product_price'=>$order->price,
        'total_price'=>$order->total_price,
        'product_quantity'=>$order->quantity,
        'img' => $order->img,
        'order_status'=>"Processing"
    ]);

}
        $carts = Cart::all();
        $carts = DB::table('carts')->where('email' , $user->email)->delete();

        return redirect()->back()->with('massage' , 'Your order is accepted!');

    }
    public function deleteCart($id){
        Cart::findOrfail($id)->delete();
        return redirect()->back()->with('message' , 'successfuly delete cart');
    }


    public function viewAllOrders(){
        $orders  = Order::paginate(5);


        return view('admin.Orders-view', compact('orders'));
    }


    public function updateStatus($id){

        Order::where('id' , $id)->update(array('order_status' => 'Accepted'));
        return redirect()->back()->with('message','Order is accepted');

    }

    public function SaveProduct($id){

        $product = Product::findOrFail($id);
        Save::create([
            'price'=>$product->price,
            'quantity'=>$product->quantity,
            'img'=>$product->img,
            'name'=>$product->name
        ]);
        return redirect()->back()->with('message','Order is accepted');




    }
    public function ViewSave(){


        $saves = Save::all();
        return view('home.save-product',compact('saves'));
    }


    public function deletesave($id){

        Save::findOrfail($id)->delete();
        return redirect()->back()->with('message' , 'Deleted save');



    }


}
