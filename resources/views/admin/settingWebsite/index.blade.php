@extends('admin.layouts.index')

@section('title', 'Setting Website')

@section('link')
<li class="breadcrumb-item active">Setting Website</li>
@endsection

@section('app')
<script>
    $(document).ready(function() {
        $('.dropify').dropify();
        $('.logo').dropify();
        $('.favicon').dropify();
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
            <div class="card-title">
                <span class="float-right">
                    Settings Website
                </span>
            </div>
            <div class="card-tools">
                
            </div>

        </div>
        <!-- /.card-header -->
        <div class="card-body" >
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('setting.update', 1) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="app_name">Nama Aplikasi</label>
                                    <input type="text" class="form-control @error('app_name') is-invalid @enderror" name="app_name" id="app_name" value="{{ $setting->app_name }}"  placeholder="Masukkan Nama kategori" autofocus>
                                    @error('app_name')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="footer_left">Footer Kiri</label>
                                    <input type="text" class="form-control @error('footer_left') is-invalid @enderror" name="footer_left" id="footer_left" value="{{ $setting->footer_left }}"  placeholder="Masukkan Nama kategori" autofocus>
                                    @error('footer_left')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="footer_right">Footer Kanan</label>
                                    <input type="text" class="form-control @error('footer_right') is-invalid @enderror" name="footer_right" id="footer_right" value="{{ $setting->footer_right }}"  placeholder="Masukkan Nama kategori" autofocus>
                                    @error('footer_right')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.col-md -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="logo">Logo</label>
                                    <input type="file" class="form-control logo @error('logo') is-invalid @enderror" name="logo" id="logo" value="{{ old('logo') }}"  data-height="100" data-width="160" data-default-file="{{ asset('/img/'.$setting->logo) }}">
                                    @error('logo')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="favicon">favicon</label>
                                    <input type="file" class="form-control favicon @error('favicon') is-invalid @enderror" name="favicon" id="favicon" value="{{ old('favicon') }}"  data-height="100" data-width="160" data-default-file="{{ asset('/img/'.$setting->favicon) }}">
                                    @error('favicon')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.col-md -->
                        </div>
                        <!-- /.row -->
                        <hr>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary float-right">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        {{-- <div class="card-footer clearfix">
            tes
        </div> --}}
    </div>
    <!-- /.card -->
</div>

{{-- <div class="col-12">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Title</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            Start creating your amazing application!
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
</div> --}}

@endsection