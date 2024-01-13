<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
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

//product

public function addViewProduct(){
    $categories = Category::all();
    return view('admin.addViewProduct',compact('categories'));

}


    public function addProduct(Request $request){
        $request->validate([
            'name'=>'required',
            'desc'=>'required',
            'price'=>'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
       ]);


       $data = $request->all();
       if($request->hasFile('img')){
        $img = $request->file('img');
        $imgName = time().'-'.$img->getClientOriginalName();
        $path = $img->storeAs('product-img',$imgName);
        $data['img']=$imgName;

       }

        // dd($data);
       Product::create($data);


       return redirect()->route('viewProduct');

    }



    public function viewProduct(){
        $products  = Product::paginate(4);

        return view('admin.viewProduct',compact('products'));
    }



    public function productEdit($id){
        {
            $categories = Category::all();
            $product = Product::findOrFail($id);
            // dd($categoria = $product) ;
            return view('admin.product-edit', compact('categories', 'product'));
        }



}

public function productUpdate(Request $request){
    $request->validate([
        'name'=>'required',
        'desc'=>'required',
        'price'=>'required',
        ]);
        Product::findOrFail($request->id)->update($request->all());
        return redirect()->route('viewProduct')->with('message','Product updated successfully');
}
    public function productDelete($id){

        Product::findOrFail($id)->delete();
        return redirect()->route('viewProduct')->with('message','Product deleted Successfully!');

    }

    public function searchProduct(request $request){
        $text = $request->search;



        $products = Product::where('name','like','%'.$text.'%')
                        ->orWhere('category', 'like' ,'%' . $text . '%')->get();

        return view('admin.viewProduct',compact('products'));






    }









}




