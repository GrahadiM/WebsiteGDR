@extends('admin.layouts.index')

@section('title', 'Update Maket')

@section('link')
<li class="breadcrumb-item "><a href="{{ route('portofolio-maket.index') }}">Maket</a></li>
<li class="breadcrumb-item active">Update</li>
@endsection

@section('style')
<link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
@endsection

@section('app')
<script src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script> 
<script>
    $(document).ready(function() {
        $('.summernote').summernote();
    });
</script>
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
        <form action="{{ route('portofolio-maket.update', $portofolio->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-6">   
                        <div class="form-group">
                            <label for="title">Nama Portofolio</label>
                            <input name="title" type="text" class="form-control" id="title" value="{{ $portofolio->title }}">
                        </div>
                        <div class="form-group">
                            <label for="building_area">Luas</label>
                            <input name="building_area" type="text" class="form-control" value="{{ $portofolio->building_area }}" id="building_area">
                        </div>
                        <div class="form-group">
                            <label for="building_length">Panjang</label>
                            <input name="building_length" type="text" class="form-control" value="{{ $portofolio->building_length }}" id="building_length">
                        </div>
                        <div class="form-group">
                            <label for="building_width">Lebar</label>
                            <input name="building_width" type="text" class="form-control" value="{{ $portofolio->building_width }}" id="building_width">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="model_id">Model</label>
                            <select name="model_id" id="model_id" class="custom-select form-control-border border-width-2">
                                @foreach ($models as $model)
                                <option value="{{ $model->id }}">{{ 'Model:' .$model->title.', Tipe:'.$model->tipe->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="user_id">Author</label>
                            <select name="user_id" id="user_id" class="custom-select form-control-border border-width-2">
                                <option value="{{ $portofolio->user->id }}">{{ $portofolio->user->name }}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="job_id">Job</label>
                            <select name="job_id" id="job_id" class="custom-select form-control-border border-width-2">
                                <option value="{{ $portofolio->job->id }}">{{ $portofolio->job->name }}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="thumbnail">Thumbnail</label>
                            <input type="file" class="form-control thumbnail @error('thumbnail') is-invalid @enderror" name="thumbnail" id="thumbnail" value="{{ old('thumbnail') }}"  data-height="100" data-width="160" data-default-file="{{ asset('image/portofolio')."/".$portofolio->thumbnail }}">
                            @error('thumbnail')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="desc" class="form-control summernote" name="deskripsi" id="deskripsi" rows="10">{!! $portofolio->desc !!}</textarea>
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
