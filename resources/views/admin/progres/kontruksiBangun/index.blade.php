@extends('admin.layouts.index')

@section('title', 'Progres')

@section('link')
<li class="breadcrumb-item active"><a href="#">Progres</a></li>
<li class="breadcrumb-item active">Kontruksi Bangunan</li>
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
    
    @if(session()->has('success'))
    <script>
        $(document).ready(function () {
            toastr["success"]('{{ session()->get('success') }}')
        });

    </script>
    @endif
@endsection

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Progres</h3>
            <div class="d-flex justify-content-end">
                <a href="{{ route('progres-kontruksi.create') }}" class="btn btn-sm btn-outline-primary">Tambah Data</a>
            </div>
        </div>
        @if (Auth::user()->role_id == 1)
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Pemesan</th>
                        <th>Mandor</th>
                        <th>Gambar</th>
                        <th>Status</th>
                        <th>Deskripsi</th>
                        <th>Alat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($progreses as $progres)
                    @if ($progres->pesanan->job_id == 1)
                    <tr>
                        <td style="text-transform: capitalize">{{ $progres->title }}</td>
                        <td style="text-transform: capitalize">{{ $progres->pesanan->user->name }}</td>
                        <td style="text-transform: capitalize">{{ $progres->user->name }}</td>
                        <td>
                            <img src="{{ asset('image/progres')."/".$progres->image }}" alt="image" width="100">
                        </td>
                        <td>{{ $progres->status }}</td>
                        <td>{{ $progres->desc }}</td>
                        <td>
                            <form action="{{ route('progres-kontruksi.destroy', $progres->id) }}" method="POST">
                                {{-- <a href="{{ route('progres-kontruksi.show', $progres->id) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a> --}}
                                <a href="{{ route('progres-kontruksi.edit', $progres->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-pencil-alt"></i></a>
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
                        <th>Judul</th>
                        <th>Pemesan</th>
                        <th>Mandor</th>
                        <th>Gambar</th>
                        <th>Status</th>
                        <th>Deskripsi</th>
                        <th>Alat</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
        @endif
        @if (Auth::user()->role_id == 2)
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Pemesan</th>
                        <th>Mandor</th>
                        <th>Gambar</th>
                        <th>Status</th>
                        <th>Deskripsi</th>
                        <th>Alat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($progreses as $progres)
                    @if ($progres->pesanan->job->id == 2)
                    @if ($progres->user_id == auth()->user()->id)
                    <tr>
                        <td style="text-transform: capitalize">{{ $progres->title }}</td>
                        <td style="text-transform: capitalize">{{ $progres->pesanan->user->name }}</td>
                        <td style="text-transform: capitalize">{{ $progres->user->name }}</td>
                        <td>
                            <img src="{{ asset('image/progres')."/".$progres->image }}" alt="image" width="100">
                        </td>
                        <td>{{ $progres->status }}</td>
                        <td>{{ $progres->desc }}</td>
                        <td>
                            <form action="{{ route('progres-kontruksi.destroy', $progres->id) }}" method="POST">
                                {{-- <a href="{{ route('progres-kontruksi.show', $progres->id) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a> --}}
                                <a href="{{ route('progres-kontruksi.edit', $progres->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-default"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    @else
                    @endif
                    @endif
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Judul</th>
                        <th>Pemesan</th>
                        <th>Mandor</th>
                        <th>Gambar</th>
                        <th>Status</th>
                        <th>Deskripsi</th>
                        <th>Alat</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
        @endif
    </div>
    <!-- /.card -->
</div>
@endsection