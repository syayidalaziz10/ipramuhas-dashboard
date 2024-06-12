<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\User;
use Illuminate\Routing\Controller as BaseController;

class UsersController extends BaseController
{
   public function index(Request $request)
   {

      $data = [
         'page'  => "Users",
         'users'  => User::all(),
      ];

      return view('/admin/users', $data);
   }
}
