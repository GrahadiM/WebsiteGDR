@extends('frontend.layouts.subindex')

@section('title', 'GDR ARCHITECT | Portofolio')

@section('banner')
<div class="banner_content text-center">
  <h2>Portofolio</h2>
  <div class="page_link">
    <a href="{{ url('/' )}}">Beranda</a>
    <a href="{{ url('/portofolio' )}}">Portofolio</a>
  </div>
</div>
@endsection

@section('content')

<!--================Gallery Area =================-->
<div class="whole-wrap">
  <div class="container">
    <div class="section-top-border">
      <div class="row justify-content-center mb-5">
        <h3 class="title_color">Kategori Utama</h3>
      </div>
      <div class="row feature_inner">
        <div class="col-lg-4 col-md-6">
          <div class="feature_item">
            <a href="{{ url('/desain') }}" class="img-gal">
              <h4><i class="lnr lnr-home"></i>Desain Bangunan</h4>
              <div class="single-gallery-image" style="background: url({{ asset('frontend') }}/images/portofolio/1.jpg);"></div>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="feature_item">
            <a href="{{ url('/kontruksi') }}" class="img-gal">
              <h4><i class="lnr lnr-apartment"></i>Kontruksi Bangunan</h4>
              <div class="single-gallery-image" style="background: url({{ asset('frontend') }}/images/portofolio/11.jpg);"></div>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="feature_item">
            <a href="{{ url('/maket') }}" class="img-gal">
              <h4><i class="lnr lnr-store"></i>Maket</h4>
              <div class="single-gallery-image" style="background: url({{ asset('frontend') }}/images/portofolio/16.jpg);"></div>
            </a>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
<!--================End Gallery Area =================-->

<!--================Blog Area =================-->
<section class="blog_area">
  <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="blog_left_sidebar">
            <div class="row justify-content-center">
              <h3 class="title_color">Hasil Semua Portofolio</h3>
            </div>
            <div class="row gallery-item mb-5">
              @foreach ($portofolios as $portofolio)
              <div class="col-md-4">
                <a href="{{ route('portofolio.detail') }}" class="img-gal"><div class="single-gallery-image" style="background: url({{ asset('image/portofolio/'.$portofolio->thumbnail) }});"></div></a>
                <h5 class="title_color mt-2">{{ $portofolio->name }}</h5>
              </div>
              @endforeach
            </div>
            {{ $portofolios->links('vendor.pagination.custom') }}
          </div>
        </div>
      </div>
  </div>
</section>
<!--================Blog Area =================-->

@endsection