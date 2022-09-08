<?php

namespace App\Http\Controllers;
use App\Models\Brands;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){

       return view('allBrand');  
    }

     public function addBrand(){
    
      return view('addBrand');    
    }


     public function saveBrand(Request $request){
    
      


   $this->validate($request, [
     'brandName' => 'required',
     'brandUrl' => 'required',
     'brandImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
     
    ]);





   
   $brand = new Brands();

   $brand->brandName = $request->brandName;
   $brand->brandUrl = $request->brandUrl;
   $brand->brandDiscription = $request->input('brandsdis');

   $brand->brandStatus = $request->brandStatus;
   $brand->brandTitle = $request->brandTitle;
   $brand->brandMeta = $request->brandMeta;






   $imageName = time().'.'.$request->brandImage->extension();  
     
   $request->brandImage->move(public_path('images'), $imageName);

   $brand->brandImage =$imageName;

   $brand->save();


  return redirect(route('addBrand'))->with("msg","Brand Added Sucessfully");
    








    }
}
