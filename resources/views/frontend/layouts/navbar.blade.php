<!--================Header Menu Area =================-->
        <header class="header_area">
           	<div class="top_menu">
           		<div class="container">
           			<div class="top_inner">
           				<div class="float-left">
           					<a href="#">Visit Us</a>
           					{{-- <a href="#">Online Support</a> --}}
           				</div>
           				<div class="float-right">
           					<ul class="list header_socila">
           						<li><a href="https://www.facebook.com/gdrarchitect/" target="_blank"><i class="fa fa-facebook"></i></a></li>
           						<li><a href="https://api.whatsapp.com/send?phone=+6285624130318&text=Dengan%20gambardesignrumah.com,.." target="_blank"><i class="fa fa-whatsapp"></i></a></li>
           						<li><a href="tel:085624130318"><i class="fa fa-phone"></i></a></li>
           						<li><a href="mailto:gambardesignrumah@gmail.com"><i class="fa fa-envelope-o"></i></a></li>
           					</ul>
           				</div>
           			</div>
           		</div>
           	</div>
            <div class="main_menu" id="mainNav">
            	<nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <a class="navbar-brand logo_h" href="{{ url('/') }}"><img src="https://gambardesignrumah.com/wp-content/uploads/2018/08/logo-gdr.png" alt=""><img src="https://gambardesignrumah.com/wp-content/uploads/2018/08/logo-gdr.png" alt=""></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                      <li class="nav-item"><a class="nav-link" href="{{ url('/') }}"><i class="fa fa-home" style="font-size:24px;"></i></a></li>
                      {{-- <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Desain Rumah</a></li> --}}
                      {{-- <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Bangun Rumah</a></li> --}}
                      <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portofolio</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item"><a class="nav-link" href="{{ url('/portofolio') }}">Portofolio Lengkap</a></li>
                          <li class="nav-item"><a class="nav-link" href="{{ url('/desain') }}">Desain Bangunan</a></li>
                          <li class="nav-item"><a class="nav-link" href="{{ url('/kontruksi') }}">Kontruksi Bangunan</a></li>
                        </ul>
                      </li>
                      <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Order</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item"><a class="nav-link" href="{{ url('/orderDesain') }}">Order Desain</a></li>
                          <li class="nav-item"><a class="nav-link" href="{{ url('/orderKontruksi') }}">Order Kontruksi</a></li>
                        </ul>
                      </li>
                      @if (Auth::user())
                      <li class="nav-item"><a class="nav-link" href="{{ url('/progresList') }}">Proggres</a></li>
                      @endif
                      <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact Us</a></li>
                      <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                          @guest()
                            Login
                          @endguest
                          @auth
                          @if (Auth::user()->id ==! 3)
                          Dashboard
                          @elseif (Auth::user()->id == 3)
                          Logout
                          @endif
                          @endauth
                        </a>
                        @if (Route::has('login.google'))
                          <ul class="dropdown-menu">
                            @auth
                              @if (auth()->user()->role_id == 3)
                                  <li class="nav-item">
                                      <a class="nav-link" href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                          {{ __('Logout') }}
                                      </a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                          @csrf
                                      </form>
                                  </li>
                              @else
                                <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Dashboard</a></li>
                              @endif
                            @else
                              <li class="nav-item"><a class="nav-link" href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a></li>
      
                              @if (Route::has('register'))
                                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                              @endif

                              {{-- <li class="nav-item"><a class="nav-link" href="{{ route('login.google') }}">Google</a></li>
      
                              @if (Route::has('login.facebook'))
                                <li class="nav-item"><a class="nav-link" href="{{ route('login.facebook') }}">Facebook</a></li>
                              @endif --}}
                            @endauth
                          </ul>
                        @endif
                      </li>
                    </ul>
                  </div> 
                </div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================--> 