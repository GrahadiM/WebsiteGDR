@extends('frontend.layouts.subindex')

@section('title', 'GDR ARCHITECT | Home')

@section('banner')
<div class="banner_content text-center">
  <h2>kontak</h2>
  <div class="page_link">
    <a href="{{ url('/' )}}">Home</a>
    <a href="{{ url('/contact-us' )}}">kontak</a>
  </div>
</div>
@endsection

@section('content')

<!--================Contact Area =================-->
<section class="contact_area p_120">
  <div class="container">
      <div id="mapBox" class="mapBox" 
          data-lat="40.701083" 
          data-lon="-74.1522848" 
          data-zoom="13" 
          data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
          data-mlat="40.701083"
          data-mlon="-74.1522848">
      </div>
      <div class="row">
          <div class="col-lg-4">
              <div class="contact_info">
                  <div class="info_item">
                      <i class="lnr lnr-home"></i>
                      <h6>DKI Jakarta, Indonesia</h6>
                      <p>Jalan H. Moong RT 06 RW 02 No 36 Kel. Baru Kec. Pasar Rebo – Jakarta Timur</p>
                  </div>
                  <div class="info_item">
                      <i class="lnr lnr-phone-handset"></i>
                      <h6><a href="https://api.whatsapp.com/send?phone=+6285624130318&text=Dengan%20gambardesignrumah.com,.." target="_blank">(+62)812 1216 7578</a></h6>
                      <p>Mon to Fri 9am to 6 pm</p>
                  </div>
                  <div class="info_item">
                      <i class="lnr lnr-envelope"></i>
                      <h6><a href="mailto:gambardesignrumah@gmail.com" target="_blank">gambardesignrumah@gmail.com</a></h6>
                      <p>Kirimkan pertanyaan anda kapan saja!</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-8">
              <form class="row contact_form" action="contact_process" method="post" id="contactForm" novalidate="novalidate">
                  <div class="col-md-6">
                      <div class="form-group">
                          <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                      </div>
                      <div class="form-group">
                          <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                      </div>
                  </div>
                  <div class="col-md-12 text-right">
                      <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</section>
<!--================Contact Area =================-->

<!--================Clients Logo Area =================-->
<section class="clients_logo_area p_120">
<div class="container">
  <div class="clients_slider owl-carousel">
    <div class="item">
      <img src="{{ asset('frontend') }}/img/clients-logo/c-logo-1.png" alt="">
    </div>
    <div class="item">
      <img src="{{ asset('frontend') }}/img/clients-logo/c-logo-2.png" alt="">
    </div>
    <div class="item">
      <img src="{{ asset('frontend') }}/img/clients-logo/c-logo-3.png" alt="">
    </div>
    <div class="item">
      <img src="{{ asset('frontend') }}/img/clients-logo/c-logo-4.png" alt="">
    </div>
    <div class="item">
      <img src="{{ asset('frontend') }}/img/clients-logo/c-logo-5.png" alt="">
    </div>
  </div>
</div>
</section>
<!--================End Clients Logo Area =================-->
@endsection