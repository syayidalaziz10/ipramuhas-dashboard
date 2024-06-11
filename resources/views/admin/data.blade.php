@extends('admin.template.main')
@include('admin.template.navbar')
@include('admin.template.header')



@section('content')
   <div class="container">
      <h2 class="main-title">Data Anggota</h2>
      <div class="row">
         <div class="col-12">
            <div class="users-table table-wrapper">
               <table class="posts-table">
                  <thead>
                     <tr class="users-table-info">
                     <th>
                        <p class="users-table__checkbox ms-20">
                           Nama
                        </p>
                     </th>
                     <th>NIP</th>
                     <th>Tempat Lahir</th>
                     <th>Tanggal Lahir</th>
                     <th>Email</th>
                     <th>Pendidikan Tertinggi</th>
                     <th>Jabatan</th>
                     <th>Pangkat/Gol</th>
                     <th>TMT Pangkat</th>
                     <th>Pranata humas</th>
                     <th>TMT PH</th>
                     <th>Instansi</th>
                     <th>Satuan Kerja</th>
                     <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                           <span class="p-relative">
                              <button class="dropdown-btn transparent-btn" type="button" title="More info">
                              <div class="sr-only">More info</div>
                              <i data-feather="more-horizontal" aria-hidden="true"></i>
                              </button>
                              <ul class="users-item-dropdown dropdown">
                              <li><a href="##">Edit</a></li>
                              <li><a href="##">Quick edit</a></li>
                              <li><a href="##">Trash</a></li>
                              </ul>
                           </span>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
@endsection 