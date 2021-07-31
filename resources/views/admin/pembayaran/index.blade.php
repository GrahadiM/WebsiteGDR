@extends('admin.layouts.index')

@section('title', 'Pembayaran')

@section('link')
<li class="breadcrumb-item">Pembayaran</li>
<li class="breadcrumb-item active">List Pembayaran</li>
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
            <h3 class="card-title">Data Pembayaran</h3>
            {{-- <div class="d-flex justify-content-end">
                <a href="{{ route('pembayaran.create') }}" class="btn btn-sm btn-outline-primary">Tambah Data</a>
            </div> --}}
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nama Pengirim</th>
                        <th>Pesanan</th>
                        <th>Nominal Harga</th>
                        <th>Pesanan</th>
                        <th>Bukti Pembayaran</th>
                        <th>Status</th>
                        <th>Tanggal Pengiriman</th>
                        <th>Alat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pembayarans as $pembayaran)
                    @if ($pembayaran->pesanan->job_id == 1)
                    <tr>
                        <td style="text-transform: capitalize">{{ $pembayaran->name }}</td>
                        <td style="text-transform: capitalize">{{ $pembayaran->pesanan->job->name }}</td>
                        <td>{{ $pembayaran->phone }}</td>
                        <td>{{ $pembayaran->payment_amount }}</td>
                        <td>
                            <img src="{{ asset('image/pembayaran')."/".$pembayaran->image }}" alt="Image" width="100">
                        </td>
                        @if ($pembayaran->status == "L")
                        <td>Lunas</td>
                        @elseif ($pembayaran->status == "BL")
                        <td>Belum Lunas</td>
                        @else
                        <td>{{ $pembayaran->status }}</td>
                        @endif
                        <td>{{ $pembayaran->created_at }}</td>
                        <td>
                            <form action="{{ route('pembayaran.destroy', $pembayaran->id) }}" method="POST">
                                {{-- <a href="{{ route('pembayaran.show', $pembayaran->id) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a> --}}
                                <a href="{{ route('pembayaran.edit', $pembayaran->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                @csrf
                                @method('DELETE')
                                {{-- <button type="submit" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-default"><i class="far fa-trash-alt"></i></button> --}}
                            </form>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama Pengirim</th>
                        <th>Pesanan</th>
                        <th>Nominal Harga</th>
                        <th>Pesanan</th>
                        <th>Bukti Pembayaran</th>
                        <th>Status</th>
                        <th>Tanggal Pengiriman</th>
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