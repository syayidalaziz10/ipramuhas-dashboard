<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController
{
   public function index(Request $request)
   {
      $data = [
         'page'  => "Dashboard",
      ];


      return view('/admin/dashboard', $data);
   }
}
