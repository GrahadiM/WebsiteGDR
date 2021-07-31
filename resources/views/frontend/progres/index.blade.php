@extends('frontend.layouts.subindex')

@section('title', 'GDR ARCHITECT | Progres List')

@section('banner')
<div class="banner_content text-center">
  <h2>Progres List</h2>
  <div class="page_link">
    <a href="{{ url('/' )}}">Beranda</a>
    <a href="{{ url('/progresList' )}}">Progres List</a>
  </div>
</div>
@endsection

@section('content')
<!--================Blog Area =================-->
<section class="blog_area mt-5">
  <div class="container">
      <div class="row">
        <div class="col-lg-12 mt-5">
          <div class="blog_left_sidebar">
            <div class="row justify-content-center">
              <h2 class="title_color">Hasil Semua Progres</h2>
            </div>
            <div class="row gallery-item mb-5">
                @foreach ($progreses as $progres)
                {{-- @if ($progres->pesanan->job->id == "proses") --}}
                @if ($progres->status == "active")
                <div class="col-md-4">
                  <a href="{{ url('/progres', $progres->id) }}" class="img-gal"><div class="single-gallery-image" style="background: url({{ asset('image/progres'.'/'.$progres->image) }});"></div></a>
                  <h5 class="title_color mt-2">Paket          : {{ $progres->pesanan->package_type }}</h5>
                  <h5 class="title_color mt-2">Kategori Tipe  : {{ $progres->pesanan->model->tipe->title }}</h5>
                  <h5 class="title_color mt-2">Kategori Model : {{ $progres->pesanan->model->title }}</h5>
                  <h5 class="title_color mt-2">{{ $progres->pesanan->job->name }}</h5>
                </div>
                @endif
                {{-- @endif --}}
                @endforeach
            </div>
          </div>
        </div>
      </div>
  </div>
</section>
<!--================Blog Area =================-->
    
@endsection