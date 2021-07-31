@extends('frontend.layouts.subindex')

@section('title', 'GDR ARCHITECT | Order Desain')

@section('banner')
<div class="banner_content text-center">
  <h2>Order Desain</h2>
  <div class="page_link">
    <a href="{{ url('/' )}}">Beranda</a>
    <a href="{{ url('/orderDesain' )}}">Order Desain</a>
  </div>
</div>
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
<section class="feature_area p_120">
  <div class="container">
    <div class="main_title">
      <h2>Formulir Pemesanan</h2>
    </div>
    <div class="comment-form">
        <form action="{{ url('/orderPost') }}" method="POST">
          @csrf
            <div class="form-group form-inline">
              <div class="form-group col-lg-12 col-md-12 input-group-icon mt-10">
                <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                <div class="form-select" id="default-select2">
                  <select name="model_id">
                    @foreach ($models as $model)
                    <option value="{{ $model->id }}">Tipe : {{ $model->tipe->title }}, Model : {{ $model->title }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group form-inline">
              <div class="form-group col-lg-6 col-md-6 input-group-icon mt-10">
                <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                <div class="form-select" id="default-select2">
                  <select name="job_id">
                    @foreach ($jobs as $job)
                    @if ($job->id == 1)
                    <option value="{{ $job->id }}">{{ $job->name }}</option>
                    @endif
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group col-lg-6 col-md-6 input-group-icon mt-10">
                <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                <div class="form-select" id="default-select2">
                  <select name="package_type">
                    <option value="Paket 3D View">Paket 3D View</option>
                    <option value="RAB">RAB</option>
                    <option value="IMB">IMB</option>
                    <option value="Paket Gambar Kerja">Paket Gambar Kerja</option>
                    <option value="Paket Lengkap">Paket Lengkap</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group form-inline">
              <div class="form-group col-lg-6 col-md-6 name">
                <input name="building_area" type="text" class="form-control" id="luas" placeholder="Luas" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Luas'">
              </div>
              <div class="form-group col-lg-6 col-md-6 email">
                <input name="building_length" type="text" class="form-control" id="panjang" placeholder="Panjang" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Panjang'">
              </div>
            </div>
            <div class="form-group form-inline">
              <div class="form-group col-lg-6 col-md-6 name">
                <input name="building_width" type="text" class="form-control" id="lebar" placeholder="Lebar" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Lebar'">
              </div>
              <div class="form-group col-lg-6 col-md-6 email">
                <input name="address" type="text" class="form-control" id="address" placeholder="Alamat" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat'">
              </div>
            </div>
            <button type="submit" class="primary-btn submit_btn">Pesan</button>	
        </form>
    </div>
  </div>
</section>
@endsection