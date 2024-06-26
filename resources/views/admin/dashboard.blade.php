@extends('admin.template.main')
@include('admin.template.navbar')
@include('admin.template.header')
@include('admin.template.footer')



@section('content')
   <div class="container">
      <h2 class="main-title">Dashboard</h2>
      {{-- <div class="row stat-cards">
         <div class="col-lg-12 white-block">
         </div>
      </div> --}}
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
         <div class="col-lg-3">
            <div class="chart white-block">
               <canvas id="keahlianChart"></canvas>
            </div>
         </div>
         <div class="col-lg-3">
            <div class="chart white-block">
               <canvas id="pangkatChart"></canvas>
            </div>
         </div>
         <div class="col-lg-3">
            <div class="chart white-block">
               <canvas id="pendidikanChart"></canvas>
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
      </div>
   </div>
@endsection

@section('script')
   <script>


      var keahlian = @json($keahlian);
      var keahlian_labels = keahlian.map(function(item) {return item.keahlian; });
      var keahlian_values = keahlian.map(function(item) {return item.total; });


      var pangkat = @json($pangkat);
      var pangkat_labels = pangkat.map(function(item) {return item.pangkat; });
      var pangkat_values = pangkat.map(function(item) {return item.total; });
      
      var pendidikan = @json($pendidikan_tertinggi);
      var pendidikan_labels = pendidikan.map(function(item) {return item.pendidikan_tertinggi; });
      var pendidikan_values = pendidikan.map(function(item) {return item.total; });


      var pangkatChart = document.getElementById('pangkatChart').getContext('2d');
      var pangkatChart = new Chart(pangkatChart, {
         type: 'pie',
         data: {
            labels: pangkat_labels,
            datasets: [{
               label: 'Pie Chart',
               data: pangkat_values,
               backgroundColor: ["#115f9a", "#1984c5", "#22a7f0", "#48b5c4", "#76c68f", "#a6d75b", "#c9e52f", "#d0ee11", "#d0f400"],
               borderColor: ["#115f9a", "#1984c5", "#22a7f0", "#48b5c4", "#76c68f", "#a6d75b", "#c9e52f", "#d0ee11", "#d0f400"],
            }]
         },
         options: {
            responsive: true,
            plugins: {

               legend: {
                  display: false,
               },

               title: {
                  display: true,
                  text: 'Grafik Berdasarkan Pangkat',
                  padding: {
                     top: 10,
                     bottom: 30
                  }
               }
            }
         }
      });
      
      var keahlianChart = document.getElementById('keahlianChart').getContext('2d');
      var keahlianChart = new Chart(keahlianChart, {
         type: 'pie',
         data: {
            labels: keahlian_labels,
            datasets: [{
               label: 'Pie Chart',
               data: keahlian_values,
               backgroundColor: ["#115f9a", "#1984c5", "#22a7f0", "#48b5c4", "#76c68f", "#a6d75b", "#c9e52f", "#d0ee11", "#d0f400"],
               borderColor: ["#115f9a", "#1984c5", "#22a7f0", "#48b5c4", "#76c68f", "#a6d75b", "#c9e52f", "#d0ee11", "#d0f400"],
            }]
         },
         options: {
            responsive: true,
            plugins: {

               legend: {
                  display: false,
               },

               title: {
                  display: true,
                  text: 'Grafik Berdasarkan Keahlian',
                  padding: {
                     top: 10,
                     bottom: 30
                  }
               }
            }
         }
      });

      var pendidikanChart = document.getElementById('pendidikanChart').getContext('2d');
      var pendidikanChart = new Chart(pendidikanChart, {
         type: 'pie',
         data: {
            labels: pendidikan_labels,
            datasets: [{
               label: 'Pie Chart',
               data: pendidikan_values,
               backgroundColor: ["#115f9a", "#1984c5", "#22a7f0", "#48b5c4", "#76c68f", "#a6d75b", "#c9e52f", "#d0ee11", "#d0f400"],
               borderColor: ["#115f9a", "#1984c5", "#22a7f0", "#48b5c4", "#76c68f", "#a6d75b", "#c9e52f", "#d0ee11", "#d0f400"],
            }]
         },
         options: {
            responsive: true,
            plugins: {

               legend: {
                  display: false,
               },

               title: {
                  display: true,
                  text: 'Grafik Berdasarkan Pendidikan',
                  padding: {
                     top: 10,
                     bottom: 30
                  }
               }
            }
         }
      });


   </script>
@endsection

