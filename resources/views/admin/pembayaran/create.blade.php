@extends('admin.layouts.index')

@section('title', 'Pembayaran')

@section('link')
<li class="breadcrumb-item">Pembayaran</li>
<li class="breadcrumb-item active">Create</li>
@endsection

@section('app')
<script>
    $(document).ready(function() {
        $('.dropify').dropify();
        $('.thumbnail').dropify();
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
            <h3 class="card-title">Form Create</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('pembayaran.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Nama Pengirim</label>
                            <input name="name" type="text" class="form-control" id="name">
                            @error('name')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="pesanan_id">Pesanan</label>
                            <select name="pesanan_id" id="pesanan_id" class="custom-select form-control-border border-width-2">
                                @foreach ($pesanans as $pesanan)
                                <option value="{{ $pesanan->id }}">Tipe: {{ $pesanan->tipe->title }}, Model: {{ $pesanan->model->title }}, Pesanan dari {{ $pesanan->user->name }}</option>
                                @endforeach
                            </select>
                            @error('pesanan_id')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">Nomer WhatsApp</label>
                            <input name="phone" type="text" class="form-control" id="phone">
                            @error('phone')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="payment_amount">Nominal Pembayaran</label>
                            <input name="payment_amount" type="text" class="form-control" id="payment_amount">
                            @error('payment_amount')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control thumbnail @error('image') is-invalid @enderror" name="image" id="image" data-height="100" data-width="160">
                            @error('image')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection