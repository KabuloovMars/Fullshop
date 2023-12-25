<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;


class AdminController extends Controller
{

    public function AddCategory(){
        $categories = Category::all();
        return view("admin.create-category",compact("categories"));
    }
    public function storeCategory(Request $request){
        $request -> validate([
            "name"=> 'required'
        ]);
        Category::create([
            "name"=> $request->name


        ]);
        return redirect()->back()->with("massage","created category successfuly!");

    }
    public function deleteCategory($id){

    $category  = Category::findOrfail($id);


    $category -> delete();
    return redirect()->back()->with("massage","category deleted successfuly!");
}



public function editCategory($id){
    $category = Category::findOrfail($id);
    return view("admin.update-category",compact("category"));

}
    public function updateCategory(Request $request){
        $category=Category::findOrfail($request->id);
        $category -> update([
                'name'=> $request->name
                ]);

        $categories= Category::all();


        return redirect('addCategory')->with('message','Category updated successfuly!');





}
}
