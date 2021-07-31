@extends('admin.layouts.index')

@section('title', 'Create Maket')

@section('link')
<li class="breadcrumb-item "><a href="{{ route('pesanan-maket.index') }}">Maket</a></li>
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
        <form action="{{ route('pesanan-maket.store') }}" method="POST">
            @csrf
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
                        <div class="form-group">
                            <label for="Portofolio_id">Portofolio</label>
                            <select name="portofolio_id" id="Portofolio_id" class="custom-select form-control-border border-width-2">
                                @foreach ($portofolios as $portofolio)
                                @if ($portofolio->job->id == 3)
                                <option value="{{ $portofolio->id }}">{{ $portofolio->name }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city_id">Kota</label>
                            <select name="city_id" id="city_id" class="custom-select form-control-border border-width-2">
                                @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="districts_id">Kecamatan</label>
                            <select name="districts_id" id="districts_id" class="custom-select form-control-border border-width-2">
                                @foreach ($districtss as $districts)
                                <option value="{{ $districts->id }}">{{ $districts->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input name="address" type="text" class="form-control" id="address">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="luas">Luas Tanah</label>
                            <input name="luas" type="text" class="form-control" id="luas">
                        </div>
                        <div class="form-group">
                            <label for="lebar">Lebar Tanah</label>
                            <input name="lebar" type="text" class="form-control" id="lebar">
                        </div>
                        <div class="form-group">
                            <label for="panjang">Panjang Tanah</label>
                            <input name="panjang" type="text" class="form-control" id="panjang">
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