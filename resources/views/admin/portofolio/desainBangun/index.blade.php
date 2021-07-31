@extends('admin.layouts.index')

@section('title', 'Portofolio')

@section('link')
<li class="breadcrumb-item active"><a href="#">Portofolio</a></li>
<li class="breadcrumb-item active">Desain Bangunan</li>
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
                <a href="{{ route('portofolio-desain.create') }}" class="btn btn-sm btn-outline-primary">Tambah Data</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Pembuat</th>
                        <th>Tipe</th>
                        <th>Model</th>
                        <th>Gambar</th>
                        <th>Luas</th>
                        <th>Panjang</th>
                        <th>Lebar</th>
                        <th>Deskripsi</th>
                        <th>Alat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($portofolios as $portofolio)
                    @if ($portofolio->job_id == 1)
                    <tr>
                        <td style="text-transform: capitalize">{{ $portofolio->title }}</td>
                        <td>{{ $portofolio->user->name }}</td>
                        <td>{{ $portofolio->model->tipe->title }}</td>
                        <td>{{ $portofolio->model->title }}</td>
                        <td>
                            <img src="{{ asset('image/portofolio')."/".$portofolio->thumbnail }}" alt="Thumbnail" width="100">
                        </td>
                        <td>{{ $portofolio->building_area }}</td>
                        <td>{{ $portofolio->building_length }}</td>
                        <td>{{ $portofolio->building_width }}</td>
                        <td>{!! $portofolio->desc !!}</td>
                        <td>
                            <form action="{{ route('portofolio-desain.destroy', $portofolio->id) }}" method="POST">
                                {{-- <a href="{{ route('portofolio-desain.show', $portofolio->id) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a> --}}
                                <a href="{{ route('portofolio-desain.edit', $portofolio->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-pencil-alt"></i></a>
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
                        <th>Nama</th>
                        <th>Pembuat</th>
                        <th>Tipe</th>
                        <th>Model</th>
                        <th>Gambar</th>
                        <th>Luas</th>
                        <th>Panjang</th>
                        <th>Lebar</th>
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