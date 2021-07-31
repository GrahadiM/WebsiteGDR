@extends('frontend.layouts.subindex')

@section('title', 'GDR ARCHITECT | Kontruksi Bangunan')

@section('banner')
<div class="banner_content text-center">
  <h2>Kontruksi Bangunan</h2>
  <div class="page_link">
    <a href="{{ url('/' )}}">Beranda</a>
    <a href="{{ url('/kontruksi' )}}">Kontruksi Bangunan</a>
  </div>
</div>
@endsection

@section('content')

<!--================Kategori Tipe Area =================-->
<div class="whole-wrap">
    <div class="container">
        <div class="section-top-border">
            <div class="row justify-content-center mb-3">
                <h2 class="title_color">Kategori Tipe</h2>
            </div>
            <div class="card" style="background-color:#c4c4c4;">
                <div class="row feature_inner" style="padding: 15px">
                    @foreach ($tipes as $tipe)
                    <div class="col-lg-4 col-md-6">
                        <div class="feature_item">
                            <a href="{{ url('/kontruksi') }}" class="img-gal">
                                <h4><i class="lnr lnr-home"></i>{{ $tipe->title }}</h4>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!--================End Kategori Tipe Area =================-->

<!--================Kategori Model =================-->
<div class="whole-wrap">
    <div class="container">
        <div class="section-top-border">
            <div class="row justify-content-center mb-3">
                <h2 class="title_color">Kategori Model</h2>
            </div>
            <div class="card" style="background-color:#c4c4c4;">
                <div class="row feature_inner" style="padding: 15px">
                    @foreach ($models as $model)
                    <div class="col-lg-4 col-md-6">
                        <div class="feature_item">
                            <a href="{{ url('/kontruksi') }}" class="img-gal">
                                <h4><i class="lnr lnr-home"></i>{{ $model->title }}</h4>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!--================End Kategori Model =================-->

<!--================Blog Area =================-->
<section class="blog_area">
  <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="blog_left_sidebar">
            <div class="row justify-content-center">
              <h1 class="title_color">Hasil Semua Portofolio</h1>
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