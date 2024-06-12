<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Routing\Controller as BaseController;

class DataController extends BaseController
{
   public function index(Request $request)
   {
      $data = [
         'page'  => "Data Anggota",
      ];


      return view('/admin/data_anggota', $data);
   }
}
