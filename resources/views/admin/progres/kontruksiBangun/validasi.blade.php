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
                            <label for="status">Status</label>
                            <select name="status" id="status" class="custom-select form-control-border border-width-2">
                                <option value="{{ $progres->status }}">{{ $progres->status }}</option>
                            </select>
                            @error('status')
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
