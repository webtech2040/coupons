<?php

namespace App\Http\Controllers;
use App\Models\Brands;
use App\Models\Coupon;

use Illuminate\Http\Request;

class CouponController extends Controller
{



    public function index(){
        

     // $data = Coupon::paginate('10')->orderBy('id', 'desc');

       $data =   Coupon::orderBy("id", "desc")->get();
       return view('allcoupons',compact('data'));  
    }





    public function addCoupon(){
     

       $brands = Brands::paginate('100');
 
    
      return view('addCoupon', compact('brands'));    
    }



public function saveCoupon(Request $request){
    
      
   
   $coupon = new Coupon();
   $coupon->brand_id = $request->brand_id;
   
  
   $coupon->coupon_title = $request->coupon_title;
   $coupon->coupon_url = $request->coupon_url;
   $coupon->coupon_dics = $request->input('coupon_dics');

   $coupon->coupon_code = $request->coupon_code;
   $coupon->expire_date = $request->expire_date;
   $coupon->discount = $request->discount;
   $coupon->type = $request->type;
   $coupon->status = $request->status;

   $coupon->save();


  return redirect(route('addCoupon'))->with("msg","Coupon Added Sucessfully");
    


    }





}
