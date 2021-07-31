@extends('admin.layouts.index')

@section('title', 'Update Maket')

@section('link')
<li class="breadcrumb-item "><a href="{{ route('portofolio-maket.index') }}">Maket</a></li>
<li class="breadcrumb-item active">Update</li>
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
            <h3 class="card-title">Form Update</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('portofolio-maket.update', $portofolio->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-6">   
                        <div class="form-group">
                            <label for="name">Nama Portofolio</label>
                            <input name="name" type="text" class="form-control" id="name" value="{{ $portofolio->name }}">
                        </div>
                        <div class="form-group">
                            <label for="tipe_id">Tipe</label>
                            <select name="tipe_id" id="tipe_id" class="custom-select form-control-border border-width-2">
                                <option value="{{ $portofolio->tipe->id }}">{{ $portofolio->tipe->title }}</option>
                                @foreach ($tipes as $tipe)
                                <option value="{{ $tipe->id }}">{{ $tipe->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="model_id">Model</label>
                            <select name="model_id" id="model_id" class="custom-select form-control-border border-width-2">
                                <option value="{{ $portofolio->model->id }}">{{ $portofolio->model->title }}</option>
                                @foreach ($models as $model)
                                <option value="{{ $model->id }}">{{ $model->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price">Harga</label>
                            <input name="price" type="text" class="form-control" id="price" value="{{ $portofolio->price }}">
                        </div>
                        <div class="form-group">
                            <label for="desc">Deskripsi</label>
                            <input name="desc" type="text" class="form-control" id="desc" value="{{ $portofolio->desc }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="thumbnail">Thumbnail</label>
                            <input type="file" class="form-control thumbnail @error('thumbnail') is-invalid @enderror" name="thumbnail" id="thumbnail" value="{{ old('thumbnail') }}"  data-height="100" data-width="160" data-default-file="{{ asset('image/portofolio')."/".$portofolio->thumbnail }}">
                            @error('thumbnail')
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
