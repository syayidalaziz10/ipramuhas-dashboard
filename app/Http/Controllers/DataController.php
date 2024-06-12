<?php

namespace App\Http\Controllers;

use App\Models\User;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class DataController extends BaseController
{
   public function index(Request $request)
   {
      $pagination = request('pagination') != null ? request('pagination') : 10;

      $users = User::with("bio_data")->paginate($pagination);
      $data = [
         'page'  => "Data Anggota",
         'users'  => $users,
      ];


      return view('/admin/data_anggota', $data);
   }
}
