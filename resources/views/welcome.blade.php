@extends('layouts.front')
@section('css')
    <style>
        .banner-image-1 {
            background-image: linear-gradient(transparent, #212121), linear-gradient(to top, transparent, #212121), url('front/photos/1.JPG');
            background-size: cover;
        }

        .banner-image-2 {
            background-image: linear-gradient(transparent, #212121), linear-gradient(to top, transparent, #212121), url('front/photos/2.JPG');
            background-size: cover;
        }

    </style>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
@endsection
@section('content')
    <div class="section">
        <div class="jd-banners banner-image-1 w-100 vh-100 d-flex justify-content-center align-items-center">
          <div class="container">
            <div class="col-md-12">
              <div class="row">
                <div class="text-center">
                    <img src="{{ asset('front/logo/logo_gram_nama/putih.png') }}" alt="" width="250" height="250"
                        style="object-fit: contain">
                </div>
              </div>
              <div class="row justify-content-md-center text-center text-white mt-5">
                <div class="col-md-2">
                  <a href="#projectSection" style="all:unset;cursor:pointer">
                    <h5><b>Project</b></h5>
                    <h1><b>12</b></h1>
                  </a>
                </div>
                <div class="col-md-2">
                  <a href="#eventSection" style="all:unset;cursor:pointer">
                    <h5><b>Event</b></h5>
                    <h1><b>9</b></h1>
                  </a>
                </div>
                <div class="col-md-2">
                  <a href="#achivementSection" style="all:unset;cursor:pointer">
                    <h5><b>Achivement</b></h5>
                    <h1><b>15</b></h1>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="section">
        <div class="jd-banners banner-image-2 w-100 vh-100 d-flex justify-content-center align-items-center">
            <div class="container-sm text-white">
                <div class="mb-5 text-center">
                    <h3 style="font-weight: bold">PROFILE</h3>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem alias dolor tempora architecto adipisci
                    nihil aspernatur quam aliquid ut natus commodi, recusandae cumque, sint laboriosam voluptate? Ut quae ea
                    libero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde magnam eligendi, totam fuga sunt
                    ea sapiente hic dolor sed quidem nisi incidunt quis expedita quasi vero pariatur provident vel amet?
                </p>
                <div class="mt-5">
                    <a href="#" class="btn text-white float-end"
                        style="background:rgba(0, 0, 0, .1);outline: #fff solid 2px;">Read More..</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="jd-banners banner-image-2 w-100 vh-100 d-flex justify-content-center align-items-center blurred-modal">
            <div class="container-sm text-white mb-5">
                <div class="mb-5 text-center">
                    <h3 style="font-weight: bold">WE ARE NOT JUST A COMMUNITY,<br> BUT WE ARE FAMILY</h3>
                    <p>
                        Actually who whe are ?
                    </p>
                </div>
                <div class="container text-center">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="col-md">
                                    <div class="jd-content">
                                        <a data-bs-toggle="modal" data-bs-target="#memberModal" target="_blank">
                                            <div class="jd-content-overlay" style="border-radius:15px;"></div>
                                            <img class="jd-content-image jd-member-img" width="300" height="450"
                                                src="{{ asset('front/member/pa_wendi.jpg') }}">
                                            <div class="jd-content-details fadeIn-bottom">
                                                <h3 class="jd-content-title">This is a title</h3>
                                                <p class="jd-content-text">This is a short description</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col-md">
                                    <div class="jd-content">
                                        <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                                            <div class="jd-content-overlay" style="border-radius:15px;"></div>
                                            <img class="jd-content-image jd-member-img" width="300" height="450"
                                                src="{{ asset('front/member/angell.jpg') }}">
                                            <div class="jd-content-details fadeIn-bottom">
                                                <h3 class="jd-content-title">This is a title</h3>
                                                <p class="jd-content-text">This is a short description</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col-md">
                                    <div class="jd-content">
                                        <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                                            <div class="jd-content-overlay" style="border-radius:15px;"></div>
                                            <img class="jd-content-image jd-member-img" width="300" height="450"
                                                src="{{ asset('front/member/pa_opik.jpg') }}">
                                            <div class="jd-content-details fadeIn-bottom">
                                                <h3 class="jd-content-title">This is a title</h3>
                                                <p class="jd-content-text">This is a short description</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col-md">
                                    <div class="jd-content">
                                        <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                                            <div class="jd-content-overlay" style="border-radius:15px;"></div>
                                            <img class="jd-content-image jd-member-img" width="300" height="450"
                                                src="{{ asset('front/member/pa_wendi.jpg') }}">
                                            <div class="jd-content-details fadeIn-bottom">
                                                <h3 class="jd-content-title">This is a title</h3>
                                                <p class="jd-content-text">This is a short description</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col-md">
                                    <div class="jd-content">
                                        <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                                            <div class="jd-content-overlay" style="border-radius:15px;"></div>
                                            <img class="jd-content-image jd-member-img" width="300" height="450"
                                                src="{{ asset('front/member/angell.jpg') }}">
                                            <div class="jd-content-details fadeIn-bottom">
                                                <h3 class="jd-content-title">This is a title</h3>
                                                <p class="jd-content-text">This is a short description</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--Modal Member-->
        <div class="modal fade" id="memberModal" tabindex="-1" aria-labelledby="memberModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content" style="background-color:rgba(33, 33, 42, 0.7)">
              <div class="float-end text-right">
                <button type="button" class="btn-close-jd float-end m-2" data-bs-dismiss="modal" aria-label="Close"><span class="iconify" data-icon="ant-design:close-outlined"></span></button>
              </div>
              <div class="modal-body">
                <div class="col-md-12">
                  <div class="row mb-2">
                    <div class="col-md-4 col-sm-12 justify-content-center d-flex align-items-center">
                      <img class="jd-content-image jd-member-img mb-3" width="100%" height="450"
                                            src="{{ asset('front/member/pa_wendi.jpg') }}">
                    </div>
                    <div class="col-md-8 col-sm-12 text-white">
                      <h5><b>SYNCHRONIC OF ART
                        FESTIVAL 2020</b> </h5>
                        <br>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae quis cumque molestiae distinctio! Cumque inventore commodi placeat accusamus ratione magni maxime vitae consectetur deleniti. Esse ipsa excepturi ratione voluptates aliquid.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id eligendi debitis quasi, veritatis explicabo ab assumenda, porro atque culpa sunt, eum fugit voluptatibus veniam consequuntur qui. Repudiandae placeat officia labore.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id eligendi debitis quasi, veritatis explicabo ab assumenda, porro atque culpa sunt, eum fugit voluptatibus veniam consequuntur qui. Repudiandae placeat officia labore.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id eligendi debitis quasi, veritatis explicabo ab assumenda, porro atque culpa sunt, eum fugit voluptatibus veniam consequuntur qui. Repudiandae placeat officia labore.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="section" id="projectSection">
      <div class="jd-banners banner-image-2 w-100 vh-100 d-flex justify-content-center align-items-center blurred-modal">
          <div class="container-sm text-white mt-5">
              <div class="mb-5 text-center">
                  <h3 style="font-weight: bold">PROJECT</h3>
              </div>
              <br>
              <div class="container mt-5">
                  <div class="swiper mySwiper4">
                      <div class="swiper-wrapper">
                          <div class="swiper-slide">
                              <div class="col-md">
                                <div class="col-md-12">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <h4><b>NEUGTREUG</b></h4>
                                <br>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi eligendi,
                                    accusantium dignissimos nobis quam recusandae doloribus! Assumenda quaerat ea rerum
                                    corrupti beatae cupiditate, veniam accusantium repellat dignissimos aliquid eos
                                    officia.</p>
                                <br>
                                <div class="col-md-4">
                                    <div class="d-grid gap-1 mb-3">
                                        <a class="btn btn-light" role="button" data-bs-toggle="modal" data-bs-target="#projectModal"><b>P L A Y</b></a>
                                        <a href="#" class="text-white text-center">Watch on Youtube
                                        </a>
                                    </div>
                                </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="jd-content-3">
                                        <img class="jd-content-image jd-member-img" width="100%" height="350"
                                              src="{{ asset('front/photos/1.jpg') }}">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div class="swiper-slide">
                              <div class="col-md">
                                <div class="col-md-12">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <h4><b>NEUGTREUG</b></h4>
                                <br>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi eligendi,
                                    accusantium dignissimos nobis quam recusandae doloribus! Assumenda quaerat ea rerum
                                    corrupti beatae cupiditate, veniam accusantium repellat dignissimos aliquid eos
                                    officia.</p>
                                <br>
                                <div class="col-md-4">
                                    <div class="d-grid gap-1">
                                        <a class="btn btn-light " role="button"><b>P L A Y</b></a>
                                        <a href="#" class="text-white text-center">Watch on Youtube
                                        </a>
                                    </div>
                                </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="jd-content-3">
                                        <img class="jd-content-image jd-member-img" width="100%" height="350"
                                              src="{{ asset('front/photos/1.jpg') }}">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div class="swiper-slide">
                              <div class="col-md">
                                <div class="col-md-12">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <h4><b>NEUGTREUG</b></h4>
                                <br>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi eligendi,
                                    accusantium dignissimos nobis quam recusandae doloribus! Assumenda quaerat ea rerum
                                    corrupti beatae cupiditate, veniam accusantium repellat dignissimos aliquid eos
                                    officia.</p>
                                <br>
                                <div class="col-md-4">
                                    <div class="d-grid gap-1">
                                        <a class="btn btn-light " role="button"><b>P L A Y</b></a>
                                        <a href="#" class="text-white text-center">Watch on Youtube
                                        </a>
                                    </div>
                                </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="jd-content-3">
                                        <img class="jd-content-image jd-member-img" width="100%" height="350"
                                              src="{{ asset('front/photos/1.jpg') }}">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                      </div>
                      <br>
                      <div class="text-center swiper-pagination3"></div>
                  </div>
              </div>
              <div class="mt-5">
                  <a href="#" class="btn btn-sm text-white float-end"
                      style="background:rgba(0, 0, 0, .1);outline: #fff solid 2px;">View More..</a>
              </div>
          </div>
      </div>
      <!--Modal Project-->
      <div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="projectModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
          <div class="modal-content" style="background-color:rgba(33, 33, 42, 0.7)">
            <div class="float-end text-right mt-2 mr-5 ml-5">
              <button type="button" class="btn-close-jd float-end " data-bs-dismiss="modal" aria-label="Close"><span class="iconify" data-icon="ant-design:close-outlined"></span></button>
            </div>
            <div class="modal-body">
              <div class="col-md-12">
                <iframe width="100%" height="500px" src="https://www.youtube.com/embed/fWIyp8Y9zjY?&autoplay=1" frameborder="0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
    <div class="section" id="eventSection">
        <div class="jd-banners banner-image-2 w-100 vh-100 d-flex justify-content-center align-items-center">
            <div class="container-sm text-white mt-5">
                <div class="mb-5 text-center">
                    <h3 style="font-weight: bold" class="float-start">EVENT</h3>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem alias dolor tempora architecto adipisci
                    nihil aspernatur quam aliquid ut natus commodi, recusandae cumque, sint laboriosam voluptate? Ut quae ea
                    libero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde magnam eligendi, totam fuga sunt
                    ea sapiente hic dolor sed quidem nisi incidunt quis expedita quasi vero pariatur provident vel amet?
                </p>
                <div class="container mt-5">
                    <div class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="col-md">
                                    <div class="jd-content-2">
                                            <div class="jd-content-overlay" style="border-radius:15px;"></div>
                                            <img class="jd-content-image jd-member-img" width="100%" height="400"
                                                src="{{ asset('front/photos/1.jpg') }}">
                                            <div class="jd-content-details-event fadeIn-bottom">
                                              <h3><b>Royal Belum World Drum Festival (RBWDF)</b></h3>
                                              <h5><b>Malaysia 2013</b></h5>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col-md">
                                    <div class="jd-content-2">
                                        <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                                            <div class="jd-content-overlay" style="border-radius:15px;"></div>
                                            <img class="jd-content-image jd-member-img" width="100%" height="400"
                                                src="{{ asset('front/photos/1.jpg') }}">
                                            <div class="jd-content-details fadeIn-bottom">
                                                <h3 class="jd-content-title">This is a title</h3>
                                                <p class="jd-content-text">This is a short description</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col-md">
                                    <div class="jd-content-2">
                                        <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                                            <div class="jd-content-overlay" style="border-radius:15px;"></div>
                                            <img class="jd-content-image jd-member-img" width="100%" height="400"
                                                src="{{ asset('front/photos/1.jpg') }}">
                                            <div class="jd-content-details fadeIn-bottom">
                                                <h3 class="jd-content-title">This is a title</h3>
                                                <p class="jd-content-text">This is a short description</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col-md">
                                    <div class="jd-content-2">
                                        <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                                            <div class="jd-content-overlay" style="border-radius:15px;"></div>
                                            <img class="jd-content-image jd-member-img" width="100%" height="400"
                                                src="{{ asset('front/photos/1.jpg') }}">
                                            <div class="jd-content-details fadeIn-bottom">
                                                <h3 class="jd-content-title">This is a title</h3>
                                                <p class="jd-content-text">This is a short description</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col-md">
                                    <div class="jd-content-2">
                                        <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                                            <div class="jd-content-overlay" style="border-radius:15px;"></div>
                                            <img class="jd-content-image jd-member-img" width="100%" height="400"
                                                src="{{ asset('front/photos/1.jpg') }}">
                                            <div class="jd-content-details fadeIn-bottom">
                                                <h3 class="jd-content-title">This is a title</h3>
                                                <p class="jd-content-text">This is a short description</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="text-center swiper-pagination2"></div>
                    </div>
                </div>
                <div class="mt-5">
                    <a href="#" class="btn btn-sm text-white float-end"
                        style="background:rgba(0, 0, 0, .1);outline: #fff solid 2px;">View More..</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="section" id="achivementSection">
        <div class="jd-banners banner-image-2 w-100 vh-100 d-flex justify-content-center align-items-center blurred-modal">
            <div class="container-sm text-white mt-5">
                <div class="mb-5 text-center">
                    <h3 style="font-weight: bold" class="float-start">ACHIVEMENT</h3>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem alias dolor tempora architecto adipisci
                    nihil aspernatur quam aliquid ut natus commodi, recusandae cumque, sint laboriosam voluptate? Ut quae ea
                    libero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde magnam eligendi, totam fuga sunt
                    ea sapiente hic dolor sed quidem nisi incidunt quis expedita quasi vero pariatur provident vel amet?
                </p>
                <div class="container mt-5">
                    <div class="swiper mySwiper3">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="col-md">
                                    <div class="jd-content-3">
                                        <div class="jd-content-overlay" style="border-radius:15px;"></div>
                                        <img class="jd-content-image jd-member-img" width="100%" height="250"
                                            src="{{ asset('front/photos/1.jpg') }}">
                                        <div class="jd-content-details-3 fadeIn-bottom">
                                            <h6>
                                                <b>SYNCHRONIC OF ART
                                                    FESTIVAL 2020</b>
                                            </h6>
                                            <br>
                                            <div class="d-grid gap-1">
                                                <button class="btn text-white btn-sm"
                                                    style="background:rgba(0, 0, 0, .1);outline: #fff solid 2px;"
                                                    role="button" data-bs-toggle="modal" data-bs-target="#achivementModal"><b>View Details</b></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col-md">
                                    <div class="jd-content-3">
                                        <div class="jd-content-overlay" style="border-radius:15px;"></div>
                                        <img class="jd-content-image jd-member-img" width="100%" height="250"
                                            src="{{ asset('front/photos/1.jpg') }}">
                                        <div class="jd-content-details-3 fadeIn-bottom">
                                            <h6>
                                                <b>KOMPETISI RAMPAK KENDANG VIRTUAL 2020</b>
                                            </h6>
                                            <br>
                                            <div class="d-grid gap-1">
                                                <a class="btn text-white btn-sm"
                                                    style="background:rgba(0, 0, 0, .1);outline: #fff solid 2px;"
                                                    role="button"><b>View Details</b></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col-md">
                                    <div class="jd-content-3">
                                        <div class="jd-content-overlay" style="border-radius:15px;"></div>
                                        <img class="jd-content-image jd-member-img" width="100%" height="250"
                                            src="{{ asset('front/photos/1.jpg') }}">
                                        <div class="jd-content-details-3 fadeIn-bottom">
                                            <h6>
                                                <b>FESTIVAL LOMBA SENI SISWA
                                                    NASIONAL 2020 (FLS2N2020)</b>
                                            </h6>
                                            <br>
                                            <div class="d-grid gap-1">
                                                <a class="btn text-white btn-sm"
                                                    style="background:rgba(0, 0, 0, .1);outline: #fff solid 2px;"
                                                    role="button"><b>View Details</b></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col-md">
                                    <div class="jd-content-3">
                                        <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                                            <div class="jd-content-overlay" style="border-radius:15px;"></div>
                                            <img class="jd-content-image jd-member-img" width="100%" height="200"
                                                src="{{ asset('front/photos/1.jpg') }}">
                                            <div class="jd-content-details-3 fadeIn-bottom">
                                                <h3 class="jd-content-title">This is a title</h3>
                                                <p class="jd-content-text">This is a short description</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col-md">
                                    <div class="jd-content-3">
                                        <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                                            <div class="jd-content-overlay" style="border-radius:15px;"></div>
                                            <img class="jd-content-image jd-member-img" width="100%" height="200"
                                                src="{{ asset('front/photos/1.jpg') }}">
                                            <div class="jd-content-details-3 fadeIn-bottom">
                                                <h3 class="jd-content-title">This is a title</h3>
                                                <p class="jd-content-text">This is a short description</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="text-center swiper-pagination3"></div>
                    </div>
                </div>
                <div class="mt-2">
                    <a href="#" class="btn btn-sm text-white float-end"
                        style="background:rgba(0, 0, 0, .1);outline: #fff solid 2px;">View More..</a>
                </div>
            </div>
        </div>
        <!--Modal Achivement-->
        <div class="modal fade" id="achivementModal" tabindex="-1" aria-labelledby="achivementModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content" style="background-color:rgba(33, 33, 42, 0.7)">
              <div class="float-end text-right">
                <button type="button" class="btn-close-jd float-end m-2" data-bs-dismiss="modal" aria-label="Close"><span class="iconify" data-icon="ant-design:close-outlined"></span></button>
              </div>
              <div class="modal-body">
                <div class="col-md-12">
                  <div class="row mb-2">
                    <div class="col-md-4 col-sm-12 justify-content-center d-flex align-items-center">
                      <img class="jd-content-image jd-member-img mb-3" width="100%" height="200"
                                            src="{{ asset('front/photos/1.jpg') }}">
                    </div>
                    <div class="col-md-8 col-sm-12 text-white">
                      <h5><b>SYNCHRONIC OF ART
                        FESTIVAL 2020</b> </h5>
                        <br>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae quis cumque molestiae distinctio! Cumque inventore commodi placeat accusamus ratione magni maxime vitae consectetur deleniti. Esse ipsa excepturi ratione voluptates aliquid.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id eligendi debitis quasi, veritatis explicabo ab assumenda, porro atque culpa sunt, eum fugit voluptatibus veniam consequuntur qui. Repudiandae placeat officia labore.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id eligendi debitis quasi, veritatis explicabo ab assumenda, porro atque culpa sunt, eum fugit voluptatibus veniam consequuntur qui. Repudiandae placeat officia labore.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id eligendi debitis quasi, veritatis explicabo ab assumenda, porro atque culpa sunt, eum fugit voluptatibus veniam consequuntur qui. Repudiandae placeat officia labore.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="section">
        <div class="jd-banners container mt-5 mb-5 text-white blurred-modal">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-5 mt-3">
                            <img src="{{ asset('front/logo/logo_gram_nama/putih.png') }}" alt="" width="100" height="100"
                                style="object-fit: contain">
                            <div class="mt-3">
                                <h5><b>SAWALA SPACE</b></h5>
                                <p>Jl. R. A. Kartini No. 28 Sumedang, West Java, Indonesia 45311</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-5 mt-3">
                            <h4><b>Contact Us</b></h4>
                            <div class="mt-4">
                                <p><span class="iconify" data-icon="bi:telephone"></span> &nbsp;(+62) 821 1791 1882
                                </p>
                                <p><span class="iconify" data-icon="ant-design:mail-outlined"></span>
                                    &nbsp;jayadwarapercussion@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mt-3 mb-5">
                            <h4><b>Follow Us</b></h4>
                            <div class="mt-4">
                                <a href="#" class="btn btn-light" style="border-radius:50%">
                                    <span class="iconify" data-icon="ri:instagram-fill"></span>
                                </a>
                                &nbsp;
                                <a href="#" class="btn btn-light" style="border-radius:50%">
                                    <span class="iconify" data-icon="akar-icons:youtube-fill"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="text-center">
                            Build with passion by <i><b>TAHU</b>NGODING</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
    @section('js')
        <script type="text/javascript">
            var nav = document.querySelector('nav');

            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 100) {
                    nav.classList.add('bg-dark', 'shadow');
                } else {
                    nav.classList.remove('bg-dark', 'shadow');
                }
            });
        </script>
        <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                spaceBetween: 10,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 40,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 50,
                    },
                },
            });
            var swiper = new Swiper(".mySwiper2", {
                slidesPerView: 1,
                spaceBetween: 10,
                pagination: {
                    el: ".swiper-pagination2",
                    clickable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 40,
                    },
                    1024: {
                        slidesPerView: 2,
                        spaceBetween: 50,
                    },
                },
            });
            var swiper = new Swiper(".mySwiper3", {
                slidesPerView: 1,
                spaceBetween: 10,
                pagination: {
                    el: ".swiper-pagination3",
                    clickable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 40,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 50,
                    },
                },
            });
            var swiper = new Swiper(".mySwiper4", {
                slidesPerView: 1,
                spaceBetween: 10,
                pagination: {
                    el: ".swiper-pagination3",
                    clickable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 40,
                    },
                    1024: {
                        slidesPerView: 1,
                        spaceBetween: 50,
                    },
                },
            });
        </script>
    @endsection
