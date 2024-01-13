<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Livewire\Exceptions\LivewirePageExpiredBecauseNewDeploymentHasSignificantEnoughChanges;

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


            return view('home.cart-view-prodcut' );



  

    }
}

