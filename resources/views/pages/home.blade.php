@extends('layout.home')

@section('content')

    <div class="carousel-inner">
       <div class="carousel-item active">
          <div class="container-fluid">
             <div class="carousel-caption">
                <div class="row">
                   <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                      <div class="text-bg">
                        <br><br>
                         <h1>Sistem <br> Asdos <br>MKU</h1>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                         <a class="read_more" href="#">Telusuri Program</a>
                      </div>
                   </div>
                   <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                      <div class="images_box">
                         <figure><img src="{{url ('frontend/images/img2.png')}}"></figure>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>




 <!-- about -->
 <div id="about"  class="about">
    <div class="container-fluid">
       <div class="row d_flex">
          <div class="col-md-5">
             <div class="about_img">
                <figure><img src="{{ url('frontend/images/about_img.jpg')}}" alt="#"/></figure>
             </div>
          </div>
          <div class="col-md-7">
             <div class="titlepage">
                <h2>About <span class="blu">Software</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit </p>
                <a class="read_more">Read More</a>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end about -->

</section>
@endsection
