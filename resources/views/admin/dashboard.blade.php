@extends('admin.template.main')
@include('admin.template.navbar')
@include('admin.template.header')
@include('admin.template.footer')



@section('content')
   <div class="container">
      <h2 class="main-title">Dashboard</h2>
      <div class="row stat-cards">
         <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
               <div class="stat-cards-icon primary">
                  <i data-feather="bar-chart-2" aria-hidden="true"></i>
               </div>
               <div class="stat-cards-info">
                  <p class="stat-cards-info__num">{{ $sum_anggota }}</p>
                  <p class="stat-cards-info__title">Total anggota</p>
               </div>
            </article>
         </div>
         <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
            <div class="stat-cards-icon warning">
               <i data-feather="file" aria-hidden="true"></i>
            </div>
            <div class="stat-cards-info">
               <p class="stat-cards-info__num">{{ $count_daftar_bulan_ini }}</p>
               <p class="stat-cards-info__title">Pendaftar bulan ini</p>
            </div>
            </article>
         </div>
         <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
               <div class="stat-cards-icon purple">
                  <i data-feather="file" aria-hidden="true"></i>
               </div>
               <div class="stat-cards-info">
                  <p class="stat-cards-info__num">{{ $count_pending }}</p>
                  <p class="stat-cards-info__title">Perlu diverifikasi</p>
               </div>
            </article>
         </div>
         <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
               <div class="stat-cards-icon success">
                  <i data-feather="feather" aria-hidden="true"></i>
               </div>
               <div class="stat-cards-info">
                  <p class="stat-cards-info__num">{{ $count_pending }}</p>
                  <p class="stat-cards-info__title">Sudah diverifikasi</p>
               </div>
            </article>
         </div>

      </div>
      <div class="row">
         <div class="col-lg-9">
            <div class="chart">
               <canvas id="myChart" aria-label="Site statistics" role="img"></canvas>
            </div>
         </div>
         <div class="col-lg-3">
            <article class="white-block">
               <div class="top-cat-title">
                  <h3>Angka keahlian</h3>
                  <p>{{ $count_keahlian->count() }} kategori keahlian</p>
               </div>
               <ul class="top-cat-list">
                  @foreach($keahlian as $item)
                     <li>
                        <a href="#">
                           <div class="top-cat-list__title">
                              {{ $item->keahlian }} <span>{{ $item->total }}</span>
                           </div>
                        </a>
                     </li>
                  @endforeach
               </ul>
            </article>
         </div>
         <div class="col-lg-9">
            <div class="users-table table-wrapper">
               <table class="posts-table">
                  <thead>
                     <tr class="users-table-info">
                        <th><p class="users-table__checkbox ms-20">Nama lengkap</p>
                        </th>
                        <th>Tanggal daftar</th>
                        <th>Status</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($anggota_pending as $anggota)
                        <tr>
                           <td>{{ $anggota->nama_lengkap }}</td>
                           <td>{{ $anggota->created_at->format('d-m-Y') }}</td>
                           <td><span class="badge-pending">Pending</span></td>
                           <td>
                              <span class="p-relative">
                                    <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                       <div class="sr-only">More info</div>
                                       <i data-feather="more-horizontal" aria-hidden="true"></i>
                                    </button>
                                    <ul class="users-item-dropdown dropdown">
                                       <li><a href="#">Quick edit</a></li>
                                       <li><a href="#">Trash</a></li>
                                    </ul>
                              </span>
                           </td>
                        </tr>
                     @endforeach                     
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
@endsection 

