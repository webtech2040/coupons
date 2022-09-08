<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    



public function all_products(){




     $data = Product::paginate(10);


    return view('all_products', compact('data'));
}



public function add_product(){


    return view('add_product');
}

public function save_product(Request $request){



  
   


   $this->validate($request, [
     'product_name' => 'required|max:30',
     'product_price' => 'required|max:5',
     'product_status' => 'required'
    ]);





   
   $products = new Product();

   $products->product_name = $request->product_name;
   $products->product_price = $request->product_price;
   $products->product_status = $request->product_status;

   $products->save();


  return redirect(route('add_product'))->with("msg","Product Added Sucessfully");
    
}




public function delete_product($id){

  
    Product::find($id)->delete();

    return redirect(route("all_products"))->with("msg","Product Delete Sucessfully");



}



public function edit($id){

    $data = Product::find($id);

 
 return view("edit_product", compact('data'));
}


public function edit_product(Request $request, $id)
{


  $data =Product::find($id);

   
   $data->product_name = $request->product_name;
   $data->product_price = $request->product_price;
   $data->product_status = $request->product_status;

    $data->save();

      return redirect(route("all_products"))->with("msg_update","Product Update Sucessfully");

    
}



























}
