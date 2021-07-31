@extends('admin.layouts.index')

@section('title', 'Ubah Kategori Tipe')

@section('link')
<li class="breadcrumb-item "><a href="{{ route('kategori-tipe.index') }}">Kategori Tipe</a></li>
<li class="breadcrumb-item active">Ubah Kategori Tipe</li>
@endsection

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Form Ubah Kategori Tipe</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('kategori-tipe.update', $tipe->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Nama Kategori</label>
                    <input name="title" type="text" class="form-control" id="title" value="{{ $tipe->title }}">
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
