@extends('frontend.layouts.subindex')

@section('title', 'GDR ARCHITECT | Progres Detail')

@section('banner')
<div class="banner_content text-center">
  <h2>Progres Detail</h2>
  <div class="page_link">
    <a href="{{ url('/' )}}">Beranda</a>
    <a href="{{ url('/progres' )}}">Progres Detail</a>
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
<!--================Blog Area =================-->
<section class="blog_area mt-5">
  <div class="container">
      <div class="row">
        <div class="col-lg-12 mt-5 mb-5">
          <div class="blog_left_sidebar">
            <div class="row justify-content-center">
              <h2 class="title_color">Hasil Semua Progres</h2>
            </div>
            <div class="whole-wrap">
				<div class="container">
					<div class="section-top-border">
						<h3 class="mb-30 title_color">{{ $progres->title }}</h3>
						<div class="row">
							<div class="col-md-3">
								<img src="{{ asset('image/progres'.'/'.$progres->image) }}" alt="" class="img-fluid">
							</div>
							<div class="col-md-9 mt-sm-20 left-align-p">
								<p>Mandor : {{ $progres->user->name }}</p>
								<p>{{ $progres->desc }}</p>
              </div>
						</div>
					</div>
                </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>
<!--================Blog Area =================-->
    
@endsection