@extends('admin.layouts.index')

@section('title', 'Kategori Model')

@section('link')
<li class="breadcrumb-item active">Kategori Model</li>
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
            $("#model").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#model_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection

@section('content')
<div class="col-12">
    
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Kategori Model</h3>
            <div class="d-flex justify-content-end">
                <a href="{{ route('kategori-model.create') }}" class="btn btn-sm btn-outline-primary">
                    Tambah Data
                </a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="model" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Kategori Tipe</th>
                        <th>Kategori Model</th>
                        <th>Link</th>
                        <th>Alat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($models as $model)
                    <tr>
                        <td style="text-transform: capitalize">{{ $model->tipe->title }}</td>
                        <td style="text-transform: capitalize">{{ $model->title }}</td>
                        <td>{{ $model->slug }}</td>
                        <td>
                            <form action="{{ route('kategori-model.destroy', $model->id) }}" method="POST">
                                {{-- <a href="{{ route('kategori-model.show', $model->id) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a> --}}
                                <a href="{{ route('kategori-model.edit', $model->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-default"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Kategori Tipe</th>
                        <th>Kategori Model</th>
                        <th>Link</th>
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