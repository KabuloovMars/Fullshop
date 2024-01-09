<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function dashboard(){
        $usertype = auth()->user()->user_type;
        if($usertype == 1){
            return view("admin.home");
        }else{
            return view("home.index");
        }
    }




    public function indexHomeProduct(){

        $products = Product::all();

        return view('home.index' , compact('products'));
    }


}

