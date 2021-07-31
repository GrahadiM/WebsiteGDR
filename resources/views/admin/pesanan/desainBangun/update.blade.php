@extends('admin.layouts.index')

@section('title', 'Update Desain Bangunan')

@section('link')
<li class="breadcrumb-item "><a href="{{ route('pesanan-desain.index') }}">Desain Bangunan</a></li>
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
        <form action="{{ route('pesanan-desain.update', $pesanan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-6"> 
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
                        {{-- <div class="form-group">
                            <label for="job_id">Job</label>
                            <select name="job_id" id="job_id" class="custom-select form-control-border border-width-2">
                                @foreach ($jobs as $job)
                                @if ($job->id == 1)
                                <option value="{{ $job->id }}">{{ $job->name }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div> --}}
                        <div class="form-group">
                            <label for="tipe_id">Kategori Tipe</label>
                            <select name="tipe_id" id="tipe_id" class="custom-select form-control-border border-width-2">
                                <option value="{{ $pesanan->tipe->id }}">{{ $pesanan->tipe->title }}</option>
                                @foreach ($tipes as $tipe)
                                <option value="{{ $tipe->id }}">{{ $tipe->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="model_id">Kategori Model</label>
                            <select name="model_id" id="model_id" class="custom-select form-control-border border-width-2">
                                @foreach ($models as $model)
                                <option value="{{ $model->id }}">{{ $model->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="package_type">Jenis Paket</label>
                            <select name="package_type" id="package_type" class="custom-select form-control-border border-width-2">
                                <option value="Paket 3D View">Paket 3D View</option>
                                <option value="{{ $pesanan->package_type }}">{{ $pesanan->package_type }}</option>
                                <option value="RAB">RAB</option>
                                <option value="IMB">IMB</option>
                                <option value="Paket Gambar Kerja">Paket Gambar Kerja</option>
                                <option value="Paket Lengkap">Paket Lengkap</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="building_area">Luas</label>
                            <input name="building_area" type="text" class="form-control" id="building_area" value="{{ $pesanan->building_area }}">
                        </div>
                        <div class="form-group">
                            <label for="building_length">Panjang</label>
                            <input name="building_length" type="text" class="form-control" id="building_length" value="{{ $pesanan->building_length }}">
                        </div>
                        <div class="form-group">
                            <label for="building_width">Lebar</label>
                            <input name="building_width" type="text" class="form-control" id="building_width" value="{{ $pesanan->building_width }}">
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <input name="address" type="text" class="form-control" id="address" value="{{ $pesanan->building_width }}">
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
