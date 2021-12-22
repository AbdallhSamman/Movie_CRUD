
@extends('layout.master')
@section('content')
    <section class="banner_section">
      <div class="banner-main">
          <img src="images/banner2.jpg" />
          <div class="container">

              <div class="text-bg relative">
                  <h1>Mp3<br><span class="Perfect">The Perfect Music</span><br>Welcome To The Music</h1>
                  <p>Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felis lacinia nec et est
                      <br> aptent taciti sociosqu ad litora torquent per conubia nostra</p>
                  <a href="#">Download Now</a>
              </div>

          </div>
      </div>

  </section>

  <!-- music-box  -->
  <div class="music-box">
      <div class="container">
          <div class="row">
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="for-box">
                      <i><img src="icon/icon1.png" alt="icon"/></i>
                      <h3>Custom Player</h3>
                      <p>t is a long established fact that a reader will be distracted by the readable </p>
                  </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="for-box">
                      <i><img src="icon/icon2.png" alt="icon"/></i>
                      <h3>Easy customize</h3>
                      <p>t is a long established fact that a reader will be distracted by the readable </p>
                  </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="for-box">
                      <i><img src="icon/icon3.png" alt="icon"/></i>
                      <h3>Music Playlist</h3>
                      <p>t is a long established fact that a reader will be distracted by the readable </p>
                  </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="for-box">
                      <i><img src="icon/icon4.png" alt="icon"/></i>
                      <h3>Custom Gallery</h3>
                      <p>t is a long established fact that a reader will be distracted by the readable </p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- end music-box  -->

  <div class="container-fluid">
      <div class="row">
          <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 padding">
              <div class="img-box">
                  <figure><img src="images/musicbg.jpg" alt="img" /></figure>
              </div>
          </div>
          <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 padding">
              <div class="text-box">
                  <div class="box">
                      <i><img src="images/5.png"/></i>
                      <h3>MEET OUR Music STARS</h3>
                      <p>It is a long established fact that a reader will be distracted by the readable
                          <br> content of a page when looking at its layout. The point of using Lorem </p>
                      <a href="#">Read More</a>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Download -->
  <div id="screenshot" class="Lastestnews">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="titlepage">
                      <h2>Latest News</h2>
                      <span>It is a long established fact that a reader will be distracted by the readable <br>content of a page when looking at its layout. The point of using Lorem </span>
                  </div>
              </div>
          </div>
          <div class="row">
            @foreach ($movie as $film)
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="news-box mb-5 movies" >
                      <figure ><img class="c" src="images/{{ $film -> image }}" alt="img" /></figure>
                      <h3>{{ $film -> name }}</h3>
                      <p class="px-5"> {{ $film -> desc }}</p>
                      <span>{{ $film -> gener }}</span>
                      <div class="row justify-content-md-center ">
                     <a  href="{{route('index.show', $film->id)}}" class="btn btn-primary col-6 mb-3 ">More details</a>
                      </div>
              </div>
              </div>
              @endforeach
            
             
          </div>
      </div>
  </div>
  <!-- end Download -->

  <!-- Albums -->
  <div id="screenshot" class="Albums">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="titlepage">
                      <h2>Albums-box </h2>
                      <span>It is a long established fact that a reader will be distracted by the readable <br>content of a page when looking at its layout. The point of using Lorem </span>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                  <div class="Albums-box">
                      <figure>
                          <a href="images/album1.jpg" class="fancybox" rel="ligthbox">
                              <img src="images/album1.jpg" class="zoom img-fluid " alt="">
                          </a>
                          <span class="hoverle">
                      <a href="images/album1.jpg" class="fancybox" rel="ligthbox"><img src="images/search.png"></a>
                      </span>
                      </figure>
                  </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                  <div class="Albums-box">
                      <figure>
                          <a href="images/album2.jpg" class="fancybox" rel="ligthbox ">
                              <img src="images/album2.jpg" class="zoom img-fluid " alt="">
                          </a>
                          <span class="hoverle">
                      <a href="images/album2.jpg" class="fancybox" rel="ligthbox"><img src="images/search.png"></a>
                      </span>
                      </figure>
                  </div>
              </div>

          </div>
      </div>
  </div>
  <!-- end Albums -->

  <!-- Newsletter -->
  <div class="Newsletter">
      <div class="container">
          <div class="row">
              <div class="col-md-12">

                  <h2>Newsletter</h2>
                  <div class="row">
                      <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 padding-right">
                          <input class="email" placeholder="Enter Your Email" type="text" name="Enter Your Email">
                      </div>
                      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 padding-left">
                          <button class="submit-btn">Subscribe</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
 
  <!-- end Newsletter -->

    @endsection
    
 