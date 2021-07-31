@extends('admin.layouts.index')

@section('title', 'Portofolio')

@section('link')
<li class="breadcrumb-item active"><a href="#">Portofolio</a></li>
<li class="breadcrumb-item active">Maket</li>
@endsection

@section('style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('AdminLTE') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('AdminLTE') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('AdminLTE') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@section('app')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('AdminLTE') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('AdminLTE') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('AdminLTE') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('AdminLTE') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('AdminLTE') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('AdminLTE') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('AdminLTE') }}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ asset('AdminLTE') }}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('AdminLTE') }}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ asset('AdminLTE') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('AdminLTE') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('AdminLTE') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Portofolio</h3>
            <div class="d-flex justify-content-end">
                <a href="{{ route('pesanan-maket.create') }}" class="btn btn-sm btn-outline-primary">Tambah Data</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Pemesan</th>
                        <th>Author</th>
                        <th>Portofolio</th>
                        <th>Kota</th>
                        <th>Kecamatan</th>
                        <th>Luas</th>
                        <th>Panjang</th>
                        <th>Lebar</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th>Alat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pesanans as $pesanan)
                    @if ($pesanan->portofolio->job_id == 3)
                    <tr>
                        <td style="text-transform: capitalize">{{ $pesanan->user->name }}</td>
                        <td style="text-transform: capitalize">{{ $pesanan->portofolio->user->name }}</td>
                        <td style="text-transform: capitalize">{{ $pesanan->portofolio->name }}</td>
                        <td style="text-transform: capitalize">{{ $pesanan->city_id }}</td>
                        <td style="text-transform: capitalize">{{ $pesanan->districts_id }}</td>
                        <td>{{ $pesanan->luas }}</td>
                        <td>{{ $pesanan->panjang }}</td>
                        <td>{{ $pesanan->lebar }}</td>
                        <td>{{ $pesanan->price }}</td>
                        <td style="text-transform: capitalize">{{ $pesanan->desc }}</td>
                        <td>
                            <form action="{{ route('pesanan-maket.destroy', $pesanan->id) }}" method="POST">
                                {{-- <a href="{{ route('pesanan-maket.show', $pesanan->id) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a> --}}
                                <a href="{{ route('pesanan-maket.edit', $pesanan->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-default"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Pemesan</th>
                        <th>Author</th>
                        <th>Portofolio</th>
                        <th>Kota</th>
                        <th>Kecamatan</th>
                        <th>Luas</th>
                        <th>Panjang</th>
                        <th>Lebar</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th>Alat</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
@endsection