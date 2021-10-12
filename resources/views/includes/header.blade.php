    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#speakers">Pricing</a></li>
          <li><a href="#schedule">Stock</a></li>
          <li><a href="#venue">Option Analyser</a></li>
          <li><a href="#hotels">Investment Details</a></li>
          <li><a href="#gallery">Strategy Builder</a></li>

           @if (Route::has('login'))
                {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
                    @auth
                    {{-- @include('layouts.navigation') --}}
                    @else
                        <li  class="buy-tickets"><a href="{{ route('login') }}">Log in / Register</a></li>
                    @endauth
                </div>
            @endif


          {{-- <li  class="buy-tickets"><a href="{{ route('login') }}">Log in / Register</a></li> --}}
        
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>