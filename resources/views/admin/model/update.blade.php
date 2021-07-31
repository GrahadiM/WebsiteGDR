@extends('admin.layouts.index')

@section('title', 'Ubah Kategori Model')

@section('link')
<li class="breadcrumb-item "><a href="{{ route('kategori-model.index') }}">Kategori Model</a></li>
<li class="breadcrumb-item active">Ubah Kategori Model</li>
@endsection

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Form Ubah Kategori Model</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('kategori-model.update', $model->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="tipe_id">Nama Tipe</label>
                    <select name="tipe_id" id="tipe_id" class="custom-select form-control-border border-width-2">
                        @foreach ($tipes as $tipe)
                        <option value="{{ $tipe->id }}">{{ $tipe->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Nama Kategori</label>
                    <input name="title" type="text" class="form-control" id="title" value="{{ $model->title }}">
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
