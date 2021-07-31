<!doctype html>
<html lang="en">
    <head>
      @include('frontend.layouts.head')
      
      <title>@yield('title')</title>
    </head>
    <body>
        
        @include('frontend.layouts.navbar')
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
					<div class="banner_inner d-flex align-items-center">
						<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
						<div class="container">
							@yield('banner')
						</div>
					</div>
        </section>
        <!--================End Home Banner Area =================-->

        @yield('content')
        
        @include('frontend.layouts.footer')
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('frontend') }}/js/jquery-3.2.1.min.js"></script>
        <script src="{{ asset('frontend') }}/js/popper.js"></script>
        <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('frontend') }}/js/stellar.js"></script>
        <script src="{{ asset('frontend') }}/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="{{ asset('frontend') }}/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="{{ asset('frontend') }}/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="{{ asset('frontend') }}/vendors/isotope/isotope-min.js"></script>
        <script src="{{ asset('frontend') }}/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="{{ asset('frontend') }}/js/jquery.ajaxchimp.min.js"></script>
        <script src="{{ asset('frontend') }}/vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="{{ asset('frontend') }}/vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="{{ asset('frontend') }}/js/mail-script.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="{{ asset('frontend') }}/js/gmaps.min.js"></script>
        <script src="{{ asset('frontend') }}/js/theme.js"></script>
    </body>
</html>