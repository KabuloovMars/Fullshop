<?php

namespace App\Http\Controllers;

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

        $products = Product::all();
            return view("home.index" ,compact('products'));
        }
    }







    public function indexHomeProduct(){

        $products = Product::all();

        return view('home.index' , compact('products'));
    }


    public function cartViewProduct(){

        if(Auth::check()){
            return view('home.cart-view-prodcut');

        }else{
            return redirect()->route('login');

        }

    }

}

