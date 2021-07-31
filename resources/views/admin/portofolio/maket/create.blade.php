@extends('admin.layouts.index')

@section('title', 'Create Maket')

@section('link')
<li class="breadcrumb-item "><a href="{{ route('portofolio-maket.index') }}">Maket</a></li>
<li class="breadcrumb-item active">Create</li>
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
            <h3 class="card-title">Form Create</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('portofolio-maket.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-6">   
                        <div class="form-group">
                            <label for="name">Nama Portofolio</label>
                            <input name="name" type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="user_id">Author</label>
                            <select name="user_id" id="user_id" class="custom-select form-control-border border-width-2">
                                @foreach ($users as $user)
                                @if ($user->id == Auth::user()->id)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="job_id">Job</label>
                            <select name="job_id" id="job_id" class="custom-select form-control-border border-width-2">
                                @foreach ($jobs as $job)
                                @if ($job->id == 3)
                                <option value="{{ $job->id }}">{{ $job->name }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tipe_id">Tipe</label>
                            <select name="tipe_id" id="tipe_id" class="custom-select form-control-border border-width-2">
                                @foreach ($tipes as $tipe)
                                <option value="{{ $tipe->id }}">{{ $tipe->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="model_id">Model</label>
                            <select name="model_id" id="model_id" class="custom-select form-control-border border-width-2">
                                @foreach ($models as $model)
                                <option value="{{ $model->id }}">{{ $model->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price">Harga</label>
                            <input name="price" type="text" class="form-control" id="price">
                        </div>
                        <div class="form-group">
                            <label for="desc">Deskripsi</label>
                            <input name="desc" type="text" class="form-control" id="desc">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="thumbnail">Thumbnail</label>
                            <input type="file" class="form-control thumbnail @error('thumbnail') is-invalid @enderror" name="thumbnail" id="thumbnail"  data-height="150" data-width="160">
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