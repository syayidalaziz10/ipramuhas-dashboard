@extends('admin.template.main')
@include('admin.template.navbar')
@include('admin.template.header')
@include('admin.template.footer')



@section('content')
    <div class="container">
        <h2 class="main-title">Data Anggota</h2>
        <div class="row">
            <div class="col-12">
                <div class="users-table table-wrapper">
                    <table class="posts-table" id="table">
                        <thead>
                            <tr class="users-table-info">
                                <th><p class="users-table__checkbox ms-20">
                                        NIP
                                    </p>
                                </th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Tempat lahir</th>
                                <th>Tanggal lahir</th>
                                <th>Pendidikan</th>
                                <th>Jabatan</th>
                                <th>Pangkat/Gol</th>
                                <th>TMT pangkat</th>
                                <th>Pranata humas</th>
                                <th>TMT PH</th>
                                <th>Instansi</th>
                                <th>Satuan kerja</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->bio_data->NIP }}</td>
                                    <td>{{ $user->bio_data->nama_lengkap }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->bio_data->tempat_lahir }}</td>
                                    <td>{{ $user->bio_data->tanggal_lahir }}</td>
                                    <td>{{ $user->bio_data->pendidikan_tertinggi }}</td>
                                    <td>{{ $user->bio_data->jabatan }}</td>
                                    <td>{{ $user->bio_data['pangkat/gol'] }}</td>
                                    <td>{{ $user->bio_data->tmt_pangkat }}</td>
                                    <td>{{ $user->bio_data->penata_humas }}</td>
                                    <td>{{ $user->bio_data->tmt_ph }}</td>
                                    <td>{{ $user->bio_data->instansi }}</td>
                                    <td>{{ $user->bio_data->satuan_kerja }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <div>
                    {!! $users->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('head')
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $("#search").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#table tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });

            $('th').click(function() {
                var indikator = '';

                var table = $(this).parents('table').eq(0)
                console.log(table);
                var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()))
                this.asc = !this.asc
                if (!this.asc) {
                    rows = rows.reverse()
                }
                for (var i = 0; i < rows.length; i++) {
                    table.append(rows[i])
                }
            })

            function comparer(index) {
                return function(a, b) {
                    var valA = getCellValue(a, index),
                        valB = getCellValue(b, index)
                    return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.toString().localeCompare(
                        valB)
                }
            }

            function getCellValue(row, index) {
                return $(row).children('td').eq(index).text()
            }

        });
    </script>
@endsection
