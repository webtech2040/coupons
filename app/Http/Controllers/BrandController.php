<?php

namespace App\Http\Controllers;
use App\Models\Brands;
use Illuminate\Http\Request;
use App\Models\Category;

class BrandController extends Controller
{
    public function index(){
        

      $data = Brands::paginate('10');


       return view('allbrands',compact('data'));  
    }

     public function addBrand(){
     

       $cats = Category::paginate('10');
 
    
      return view('addBrand', compact('cats'));    
    }


     public function saveBrand(Request $request){
    
      


   $this->validate($request, [
     'brandName' => 'required',
     'brandUrl' => 'required',
     'brandImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
     
    ]);





   
   $brand = new Brands();
   $brand->cat_id = $request->cat_id;
   
   $brand->fq1 = $request->fq1;
   $brand->fq2 = $request->fq2;
   $brand->fq3 = $request->fq3;
   $brand->fq4 = $request->fq4;
   $brand->fq5 = $request->fq5;




   $brand->slug = str_slug($request->brandName , "-");
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
