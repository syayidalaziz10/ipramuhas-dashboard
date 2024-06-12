@extends('admin.template.main')
@include('admin.template.navbar')
@include('admin.template.header')
@include('admin.template.footer')


@section('content')
   <div class="container">
      <h2 class="main-title">Data Pengguna</h2>
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
                     <th>Email</th>
                     <th>Password</th>
                     <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($users as $user)
                        <tr>
                           <td>{{ $user->name }}</td>
                           <td>{{ $user->email }}</td>
                           <td>{{ $user->password }}</td>
                           <td>
                              <span class="p-relative">
                                 <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                 <div class="sr-only">More info</div>
                                 <i data-feather="more-horizontal" aria-hidden="true"></i>
                                 </button>
                                 <ul class="users-item-dropdown dropdown">
                                 <li><a href="#">Edit</a></li>
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