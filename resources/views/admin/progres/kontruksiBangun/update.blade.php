@extends('admin.layouts.index')

@section('title', 'Update Kontruksi Bangunan')

@section('link')
<li class="breadcrumb-item "><a href="{{ route('progres-kontruksi.index') }}">Kontruksi Bangunan</a></li>
<li class="breadcrumb-item active">Update</li>
@endsection

@section('app')
<script>
    $(document).ready(function() {
        $('.dropify').dropify();
        $('.image').dropify();
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
            <h3 class="card-title">Form Update</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('progres-kontruksi.update', $progres->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="title">Judul</label>
                            <input name="title" type="text" class="form-control" id="title" value="{{ $progres->title }}">
                            @error('title')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="user_id">User</label>
                            <select name="user_id" id="user_id" class="custom-select form-control-border border-width-2">
                                @foreach ($users as $user)
                                @if ($user->role_id == 2)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endif
                                @endforeach
                            </select>
                            @error('user_id')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="pesanan_id">Pesanan</label>
                            <select name="pesanan_id" id="pesanan_id" class="custom-select form-control-border border-width-2">
                                @foreach ($pesanans as $pesanan)
                                @if ($pesanan->job_id == 2)
                                <option value="{{ $pesanan->id }}">Tipe: {{ $pesanan->tipe->title }}, Model: {{ $pesanan->model->title }}, Pesanan dari {{ $pesanan->user->name }}</option>
                                @endif
                                @endforeach
                            </select>
                            @error('pesanan_id')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="job_id">Jobs</label>
                            <select name="job_id" id="job_id" class="custom-select form-control-border border-width-2">
                                <option value="{{ $progres->job->id }}">{{ $progres->job->name }}</option>
                            </select>
                            @error('job_id')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="desc">Deskripsi</label>
                            <input name="desc" type="text" class="form-control" id="desc" value="{{ $progres->desc }}">
                            @error('desc')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="image">image</label>
                            <input type="file" class="form-control image @error('image') is-invalid @enderror" name="image" id="image" value="{{ old('image') }}"  data-height="100" data-width="160" data-default-file="{{ asset('image/progres')."/".$progres->image }}">
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
