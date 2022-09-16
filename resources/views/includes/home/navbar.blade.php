 {{-- <!-- header -->

    <!-- header inner -->
    <div class="container-scroller">
    <div class="header">
       <div class="container-fluid">
          <div class="row">
             <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                <div class="full">
                   <div class="center-desk">
                      <div class="logo">
                         <a href="index.html"><img src="{{ url('frontend/images/Logo_Unib.png')}}" alt="#" /></a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                <ul class="btn">
                   <li><a href="#">Beranda</a></li>
                   <li><a href="#">Program</a></li>
                   <li><a href="{{route('login')}}"><i class="bi bi-person-circle " style="font-size: 30px"></i></a></li>
                      </button>
                   </li>
                </ul>
             </div>
          </div>
       </div>
    </div>
 --}}

 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">OnePage</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a href="#">Beranda</a></li>
                   <li><a href="#">Program</a></li>
                   <li><a href="{{route('login')}}"><i class="bi bi-person-circle " style="font-size: 30px"></i></a></li>
                      </button>
                   </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
