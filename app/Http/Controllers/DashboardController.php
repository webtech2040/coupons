<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{


     public function __construct()
    {
        $this->middleware('auth');
    }
    


   public function dashboard(){


      return view("dashboard");

   }



   public function dashboard_info(){


      return view("dashboard_info");

   }



   public function dashboard_count(){


      return view("dashboard_count");

   }











}
