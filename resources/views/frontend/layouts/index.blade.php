<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      @include('frontend.layouts.head')
      
      <title>@yield('title')</title>
    </head>
    <body>
        
        @include('frontend.layouts.navbar')
        
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            {{-- <div class="banner_content">
                                <h2>Precise concept design <br />for stylish living</h2>
                                <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
                                <a class="banner_btn" href="#">Get Started</a>
                            </div> --}}
                            <div id="slide-show" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#slide-show" data-slide-to="0" class="active"></li>
                                    <li data-target="#slide-show" data-slide-to="1"></li>
                                    <li data-target="#slide-show" data-slide-to="2"></li>
                                    <li data-target="#slide-show" data-slide-to="3"></li>
                                    <li data-target="#slide-show" data-slide-to="4"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="banner_content">
                                            <img src="{{ asset('image/slider/slide-1.png') }}" class="rounded mx-auto d-block w-100" style="width: 50%" alt="...">
                                            {{-- <div class="carousel-caption d-none d-md-block">
                                                <h2>Designer Rumah</h2>
                                                <a class="banner_btn" href="#">Get Started</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="banner_content">
                                            <img src="{{ asset('image/slider/slide-3.png') }}" class="rounded mx-auto d-block w-100" alt="...">
                                            {{-- <div class="carousel-caption d-none d-md-block">
                                                <h2>Bangun Rumah</h2>
                                                <a class="banner_btn" href="#">Get Started</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="banner_content">
                                            <img src="{{ asset('image/slider/slide-2.png') }}" class="rounded mx-auto d-block w-100" alt="...">
                                            {{-- <div class="carousel-caption d-none d-md-block">
                                                <h2>Cara Order & Harga</h2>
                                                <a class="banner_btn" href="#">Get Started</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="banner_content">
                                            <img src="{{ asset('image/slider/slide-5.png') }}" class="rounded mx-auto d-block w-100" alt="...">
                                            {{-- <div class="carousel-caption d-none d-md-block">
                                                <h2>Portofolio Rumah</h2>
                                                <a class="banner_btn" href="#">Get Started</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="banner_content">
                                            <img src="{{ asset('image/slider/slide-4.png') }}" class="rounded mx-auto d-block w-100" alt="...">
                                            {{-- <div class="carousel-caption d-none d-md-block">
                                                <h2>Contact Us</h2>
                                                <a class="banner_btn" href="#">Get Started</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#slide-show" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#slide-show" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="home_right_box">
                                <div class="home_item">
                                    <i class="flaticon-sofa"></i>
                                </div>
                                <div class="home_item">
                                    <i class="flaticon-bed"></i>
                                </div>
                                <div class="home_item">
                                    <i class="lnr lnr-home"></i>
                                {{-- <i class="flaticon-computer"></i> --}}
                                </div>
                                <div class="home_item">
                                    <i class="lnr lnr-store"></i>
                                {{-- <i class="flaticon-mirror"></i> --}}
                                </div>
                                <div class="home_item">
                                    <i class="flaticon-closet"></i>
                                </div>
                                <div class="home_item">
                                    <i class="flaticon-kitchen"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

        @yield('content')
        
        <!--================Footer Area =================-->
        <footer class="footer_area p_120">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget ab_widget">
        					<div class="f_title">
        						<h3>About Me</h3>
        					</div>
        					<p>Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills,</p>
        					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        				</aside>
        			</div>
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3>Newsletter</h3>
        					</div>
        					<p>Stay updated with our latest trends</p>
        					<div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                	<div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>		
                                    </div>				
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
        				</aside>
        			</div>
        			<div class="col-lg-2">
        				<aside class="f_widget social_widget">
        					<div class="f_title">
        						<h3>Follow Me</h3>
        					</div>
        					<p>Let us be social</p>
        					<ul class="list">
                                <li><a href="https://www.facebook.com/gdrarchitect/" target="_blank"><i class="fa fa-facebook"></i></a></li>
           						<li><a href="https://api.whatsapp.com/send?phone=+6285624130318&text=Dengan%20gambardesignrumah.com,.." target="_blank"><i class="fa fa-whatsapp"></i></a></li>
           						<li><a href="tel:085624130318"><i class="fa fa-phone"></i></a></li>
           						<li><a href="mailto:gambardesignrumah@gmail.com"><i class="fa fa-envelope-o"></i></a></li>
        					</ul>
        				</aside>
        			</div>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        
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