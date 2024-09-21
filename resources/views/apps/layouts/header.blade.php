 <!-- ======= Top Bar ======= -->
  {{-- <div id="topbar" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
      <a href="index.html" class="logo"><img src="{{asset('landing')}}/images/bdi3.png" alt="" style="width:300px;height:auto"></a>

      </div>
      
    </div>
  </div> --}}

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

      {{-- <h1 class="logo"><a href="index.html">Anyar</a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="/" class="logo"><img src="{{asset('logo-text.png')}}" alt="" class="img-fluid" style="max-height:65px"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{url('/')}}">Home</a></li>
          
          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{url('/sejarah')}}">Sejarah</a></li>
              
              <li><a href="{{url('/struktur')}}">Struktur Organisasi</a></li>
            </ul>
          </li>
          
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
