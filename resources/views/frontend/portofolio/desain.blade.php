@extends('frontend.layouts.subindex')

@section('title', 'GDR ARCHITECT | Desain Bangunan')

@section('banner')
<div class="banner_content text-center">
  <h2>Desain Bangunan</h2>
  <div class="page_link">
    <a href="{{ url('/' )}}">Beranda</a>
    <a href="{{ url('/desain' )}}">Desain Bangunan</a>
  </div>
</div>
@endsection

@section('content')

{{-- <div class="container">
    <div class="row">
        <div class="col-lg-12"><div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <div class="row justify-content-center">
                        <h2 class="title_color">Kategori Tipe</h2>
                    </div>
                  </button>
                </h2>
              </div>
          
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="row justify-content-center">
                        <h2 class="title_color">Kategori Model</h2>
                    </div>
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  Some placeholder content for the second accordion panel. This panel is hidden by default.
                </div>
              </div>
            </div>
        </div>
    </div>
</div> --}}

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
                            <a href="{{ url('/desain') }}" class="img-gal">
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
                            <a href="{{ url('/desain') }}" class="img-gal">
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