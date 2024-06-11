<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Routing\Controller as BaseController;

class DataController extends BaseController
{
   public function index(Request $request)
   {
      $data = [
         'page'  => "data",
      ];


      return view('/admin/data', $data);
   }
}
