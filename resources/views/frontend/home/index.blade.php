@extends('frontend.layouts.index')

@section('title', 'GDR ARCHITECT | Home')

@section('content')

<!--================Feature Area =================-->
<section class="feature_area p_120">
  <div class="container">
    <div class="main_title">
      <h2>Layanan Kami</h2>
    </div>
    <div class="row feature_inner">
      <div class="col-lg-6 col-md-6">
        <div class="feature_item">
          <h4 class="text-center" class="text-center"><i class="lnr lnr-picture"></i>Desain Bangunan</h4>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="feature_item">
          <h4 class="text-center"><i class="lnr lnr-construction"></i>Kontruksi Bangunan</h4>
        </div>
      </div>
      {{-- <div class="col-lg-4 col-md-6">
        <div class="feature_item">
          <h4 class="text-center"><i class="lnr lnr-picture"></i>Maket</h4>
        </div>
      </div> --}}
    </div>
  </div>
  <div class="container mt-5">
    <div class="main_title">
      <h2>Mengapa Memilih Kami</h2>
    </div>
    <div class="row feature_inner">
      <div class="col-lg-4 col-md-6">
        <div class="feature_item">
          <h4 class="text-center"><i class="lnr lnr-user"></i>Profesional</h4>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="feature_item">
          <h4 class="text-center"><i class="lnr lnr-phone"></i>Konsultasi</h4>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="feature_item">
          <h4 class="text-center"><i class="lnr lnr-diamond"></i>Harga Ekonomis</h4>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================End Feature Area =================-->

<!--================Gallery Area =================-->
<div class="whole-wrap">
  <div class="container">
    <div class="section-top-border">
      <div class="row justify-content-center mb-3">
        <h2 class="title_color">PORTOFOLIO <a href="" class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></a></h2>
      </div>
      <div class="row feature_inner">
        <div class="col-lg-6 col-md-6">
          <div class="feature_item">
            <a href="{{ url('/desain') }}" class="img-gal">
              <h4><i class="lnr lnr-home"></i>Desain Bangunan</h4>
              <div class="single-gallery-image" style="background: url({{ asset('frontend') }}/images/portofolio/1.jpg);"></div>
            </a>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="feature_item">
            <a href="{{ url('/kontruksi') }}" class="img-gal">
              <h4><i class="lnr lnr-apartment"></i>Kontruksi Bangunan</h4>
              <div class="single-gallery-image" style="background: url({{ asset('frontend') }}/images/portofolio/11.jpg);"></div>
            </a>
          </div>
        </div>
        {{-- <div class="col-lg-4 col-md-6">
          <div class="feature_item">
            <a href="{{ url('/maket') }}" class="img-gal">
              <h4><i class="lnr lnr-store"></i>Maket</h4>
              <div class="single-gallery-image" style="background: url({{ asset('frontend') }}/images/portofolio/16.jpg);"></div>
            </a>
          </div>
        </div> --}}
      </div>

      <div class="row justify-content-center mt-5">
        {{-- <h3 class="title_color">SAMPEL <a href="" class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></a></h3> --}}
        <h3 class="title_color">{{ __('SAMPEL') }}</h3>
      </div>
      <div class="row gallery-item">
        <div class="col-md-4">
          <a href="{{ url('/') }}" class="img-gal"><div class="single-gallery-image" style="background: url({{ asset('frontend') }}/images/portofolio/1.jpg);"></div></a>
        </div>
        <div class="col-md-4">
          <a href="{{ url('/') }}" class="img-gal"><div class="single-gallery-image" style="background: url({{ asset('frontend') }}/images/portofolio/2.jpg);"></div></a>
        </div>
        <div class="col-md-4">
          <a href="{{ url('/') }}" class="img-gal"><div class="single-gallery-image" style="background: url({{ asset('frontend') }}/images/portofolio/3.jpg);"></div></a>
        </div>
        <div class="col-md-6">
          <a href="{{ url('/') }}" class="img-gal"><div class="single-gallery-image" style="background: url({{ asset('frontend') }}/images/portofolio/4.jpg);"></div></a>
        </div>
        <div class="col-md-6">
          <a href="{{ url('/') }}" class="img-gal"><div class="single-gallery-image" style="background: url({{ asset('frontend') }}/images/portofolio/5.jpg);"></div></a>
        </div>
        <div class="col-md-4">
          <a href="{{ url('/') }}" class="img-gal"><div class="single-gallery-image" style="background: url({{ asset('frontend') }}/images/portofolio/6.jpg);"></div></a>
        </div>
        <div class="col-md-4">
          <a href="{{ url('/') }}" class="img-gal"><div class="single-gallery-image" style="background: url({{ asset('frontend') }}/images/portofolio/7.jpg);"></div></a>
        </div>
        <div class="col-md-4">
          <a href="{{ url('/') }}" class="img-gal"><div class="single-gallery-image" style="background: url({{ asset('frontend') }}/images/portofolio/8.jpg);"></div></a>
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
              <h2 class="title_color">Hasil Semua Portofolio</h2>
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