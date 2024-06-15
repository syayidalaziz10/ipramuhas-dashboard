<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\BioDataUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController
{
   public function index(Request $request)
   {

      $startOfMonth = Carbon::now()->startOfMonth();
      $endOfMonth = Carbon::now()->endOfMonth();

      $data = [
         'page'  => "Dashboard",
         'sum_anggota' => BioDataUser::count(),
         'count_daftar_bulan_ini' => BioDataUser::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count(),
         'count_pending' => BioDataUser::where('status', 'Pending')->count(),
         'anggota_pending' => BioDataUser::where('status', 'Pending')->get(),
         'count_keahlian' => BioDataUser::pluck('keahlian')->flatten()->unique(),
         'keahlian' => DB::table('bio_data_users')->select('keahlian', DB::raw('COUNT(*) as total'))->groupBy('keahlian')->get(),

      ];

      return view('/admin/dashboard', $data);
   }
}
