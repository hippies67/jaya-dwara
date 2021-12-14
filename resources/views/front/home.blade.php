@extends('layouts.front')
@section('css')
    @foreach ($banner as $item)
        <style>
            .banner-image-{{$loop->iteration}} {
                @if($loop->iteration == 1)
                background-image: linear-gradient(transparent, #21212A), linear-gradient(to top, transparent, #21212A), url('{{Str::replace("public","storage",$item->image)}}');
                @else 
                background-image: linear-gradient(transparent, #21212A), linear-gradient(to top, transparent, #21212A), url('{{Str::replace("public","storage",$item->image)}}');
                @endif
                background-size: cover;
            }
        </style>
    @endforeach
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
@endsection
@section('content')
    <div class="section">
        <div class="jd-banners banner-image-1 w-100 vh-100 d-flex justify-content-center align-items-center">
          <div class="container">
            <div class="col-md-12">
              <div class="row">
                <div class="text-center">
                    <img src="{{ Storage::url($profile->logo) }}" class="logo-landing" alt="" width="250" height="250"
                        style="object-fit: contain">
                </div>
              </div>
              <div class="row justify-content-md-center text-center text-white">
                <div class="col-md-2">
                  <a href="#projectSection" style="all:unset;cursor:pointer">
                    <h5><b>Project</b></h5>
                    <h1><b>{{$count_project}}</b></h1>
                  </a>
                </div>
                <div class="col-md-2">
                  <a href="#eventSection" style="all:unset;cursor:pointer">
                    <h5><b>Event</b></h5>
                    <h1><b>{{$count_event}}</b></h1>
                  </a>
                </div>
                <div class="col-md-2">
                  <a href="#achievementSection" style="all:unset;cursor:pointer">
                    <h5><b>Achievement</b></h5>
                    <h1><b>{{$count_achievement}}</b></h1>
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
                    <h3 class="jd-section-title">PROFILE</h3>
                </div>
                {!! Str::limit($profile->description, 500) !!}
                <div class="mt-5">
                    <a href="{{url('profile')}}" class="btn btn-sm text-white float-end"
                        >Read More..</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="jd-banners banner-image-3 w-100 vh-100 d-flex justify-content-center align-items-center blurred-modal">
            <div class="container-sm text-white mb-5">
                <div class="mb-5 text-center">
                    <h3 class="jd-section-title">WE ARE NOT JUST A COMMUNITY,<br> BUT WE ARE FAMILY</h3>
                    <p>
                        Actually who whe are ?
                    </p>
                </div>
                <div class="container text-center">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach ($member as $item)
                                <div class="swiper-slide">
                                    <div class="col-md">
                                        <div class="jd-content">
                                            <a style="cursor:pointer" onclick="showModalMember('{{$item->fullname}}','{{$item->position}}','{{Storage::url($item->photo)}}')" target="_blank">
                                                <div class="jd-content-overlay" style="border-radius:15px;"></div>
                                                <img class="jd-content-image jd-member-img" width="300" height="450"
                                                    src="{{ Storage::url($item->photo)}}">
                                                <div class="jd-content-details fadeIn-bottom">
                                                    <h3 class="jd-content-title">{{$item->fullname}}</h3>
                                                    <p class="jd-content-text">{{$item->position}}</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="mt-5">
                    <a href="{{url('member')}}" class="btn btn-sm text-white float-end ml-5"
                        >View More..</a>
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
                      <img class="jd-content-image jd-member-img mb-3" id="member_photo" width="100%" height="450"
                                            src="#">
                    </div>
                    <div class="col-md-8 col-sm-12 text-white">
                      <h5><b id="member_fullname"></b> </h5>
                        <br>
                        <p id="member_position"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="section blurred-modal" id="projectSection">
      <div class="jd-banners banner-image-4 w-100 vh-100 d-flex justify-content-center align-items-center blurred-modal">
          <div class="container-sm text-white mt-5">
              <div class=" float-start m-3">
                  <h3 class="jd-section-title">PROJECT</h3>
              </div>
              <div class="container mt-5">
                  <div class="swiper mySwiper4">
                      <div class="swiper-wrapper">
                          @foreach ($project as $item)
                            <div class="swiper-slide">
                                <div class="col-md">
                                    <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                        <h4><b>{{$item->name}}</b></h4>
                                    <br>
                                    <p>{{Str::limit($item->description,100)}}</p>
                                    <br>
                                    <div class="col-md-4">
                                        <div class="d-grid gap-1 mb-3">
                                            @if ($item->youtube)
                                                <a class="btn btn-light" role="button" onclick="showModalProject('{{$item->youtube}}')"><b>P L A Y</b></a>
                                                <a href="{{$item->youtube}}" target="_blank" class="text-white text-center">Watch on Youtube
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="jd-content-3">
                                            <a href="{{$item->youtube}}" target="_blank">
                                                <img class="jd-project-img"
                                                    src="{{Storage::url($item->image)}}">
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                          @endforeach
                      </div>
                      <br>
                      <div class="text-center swiper-pagination3"></div>
                  </div>
              </div>
              <div class="mt-1">
                  <a href="#" class="btn btn-sm text-white float-end"
                      >View More..</a>
              </div>
          </div>
      </div>
      <!--Modal Project-->
      <div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="projectModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
          <div class="modal-content jd-modal-transparent" style="background-color:rgba(33, 33, 42, 0.7)">
            <div class="float-end text-right mt-2 mr-5 ml-5">
              <button type="button" class="btn-close-jd float-end " data-bs-dismiss="modal" aria-label="Close"><span class="iconify" data-icon="ant-design:close-outlined"></span></button>
            </div>
            <div class="modal-body">
              <div class="col-md-12">
                <iframe width="100%" id="project_youtube" height="500px" src="#" frameborder="0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
    <div class="section blurred-modal" id="eventSection">
        <div class="jd-banners banner-image-5 w-100 vh-100 d-flex">
            <div class="container-sm text-white mt-5">
                <div class="mb-3 float-start">
                    <h3 class="jd-section-title mb-3">EVENT</h3>
                    <p>
                        JAYADWARA has participated in many art events from national to international level. Here are some of the events we have participated in.
                    </p>
                </div>
                <div class="container">
                    <div class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            @foreach ($event as $item)
                                <div class="swiper-slide">
                                    <div class="col-md">
                                        <a role="button" onclick="showModalEvent('{{Storage::url($item->image)}}','{{$item->name}}','{{$item->location}}','{{date('Y', strtotime($item->date))}}')">
                                            <div class="jd-content-2">
                                                    <div class="jd-content-overlay" style="border-radius:15px;"></div>
                                                    <img class="jd-content-image jd-member-img" width="100%" height="400"
                                                        src="{{ Storage::url($item->image) }}">
                                                    <div class="jd-content-details-event fadeIn-bottom text-white">
                                                    <h3><b>{{$item->name}}</b></h3>
                                                    <h5><b>{{$item->location}} <span id="event_tahun">{{date('Y', strtotime($item->date))}}</span></b></h5>
                                                    </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <br>
                        <div class="text-center swiper-pagination2"></div>
                    </div>
                </div>
                <div class="mt-1">
                    <a href="{{url('event')}}" class="btn btn-sm text-white float-end"
                        >View More..</a>
                </div>
            </div>
        </div>
    </div>
    <!--Modal Event-->
    <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content jd-modal-transparent">
            <div class="float-end text-right">
                <button type="button" class="btn-close-jd float-end m-2" data-bs-dismiss="modal" aria-label="Close"><span class="iconify" data-icon="ant-design:close-outlined"></span></button>
                </div>
            <div class="modal-body">
                <div class="col-md-12">
                <img class="jd-content-image jd-member-img mb-3" width="100%" height="500" id="event_image"
                                        src="#">
                </div>
                <div class="jd-modal-image-caption">
                    <h3><b id="event_name"></b></h3>
                    <h5><b id="event_location"> <span id="event_tahun"></span></b></h5>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    
    <div class="section blurred-modal" id="achievementSection">
        <div class="jd-banners banner-image-6 w-100 vh-100 d-flex ">
            <div class="container-sm text-white mt-5">
                <div class="mb-3 float-start">
                    <h3 class="jd-section-title mb-3">ACHIEVEMENT</h3>
                    <p>
                        JAYADWARA as a traditional music group, has so far received many awards. The following are some of the awards we have received.
                    </p>
                </div>
                <div class="container">
                    <div class="swiper mySwiper3">
                        <div class="swiper-wrapper">
                            @foreach ($achievement as $item)
                                <div class="swiper-slide">
                                    <div class="col-md">
                                        <div class="jd-content-3">
                                            <div class="jd-content-overlay" style="border-radius:15px;"></div>
                                            <img class="jd-content-image jd-member-img" width="100%" height="250"
                                                src="{{ Storage::url($item->image) }}">
                                            <div class="jd-content-details-3 fadeIn-bottom">
                                                <h6>
                                                    <b>{{$item->name}}</b>
                                                </h6>
                                                <br>
                                                <div class="d-grid gap-1">
                                                    <button class="btn text-white btn-sm"
                                                    style="background:rgba(0, 0, 0, .1);outline: #fff solid 1px;"
                                                        role="button" onclick="showModalAchievement('{{ Storage::url($item->image) }}','{{$item->name}}','{{$item->description}}')"><b>View Details</b></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <br>
                    </div>
                </div>
                <div class="text-center swiper-pagination3"></div>
                @if (count($achievement) > 3)
                    <div class="mt-2">
                        <a href="{{url('achievement')}}" class="btn btn-sm text-white float-end"
                            >View More..</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!--Modal achievement-->
    <div class="modal fade" id="achievementModal" tabindex="-1" aria-labelledby="achievementModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content" style="background-color:rgba(33, 33, 42, 0.7)">
          <div class="float-end text-right">
            <button type="button" class="btn-close-jd float-end m-2" data-bs-dismiss="modal" aria-label="Close"><span class="iconify" data-icon="ant-design:close-outlined"></span></button>
          </div>
          <div class="modal-body">
            <div class="col-md-12">
              <div class="row mb-2">
                <div class="col-md-4 col-sm-12 justify-content-center d-flex align-items-center">
                  <img class="jd-content-image jd-member-img mb-3" width="100%" height="200" id="achievement_image"
                                        src="#">
                </div>
                <div class="col-md-8 col-sm-12 text-white">
                  <h5><b id="achievement_name"></b> </h5>
                    <br>
                    <div id="achievement_description"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
@section('js')
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script>

        function showModalMember(fullname,position,photo){
            $('#member_fullname').html(fullname);
            $('#member_position').html(position);
            $('#member_photo').attr('src',photo);
            $('#memberModal').modal('show');
        }

        function showModalProject(youtube){
            var url = new URL(youtube);
            var c = url.searchParams.get("v");

            $('#project_youtube').attr('src','https://youtube.com/embed/'+c);
            $('#projectModal').modal('show');
        }

        function showModalEvent(image,name,location,tahun){
            $('#event_name').html(name);
            $('#event_image').attr('src',image);
            $('#event_location').html(location);
            $('#event_tahun').html(tahun);
            $('#eventModal').modal('show');
        }

        function showModalAchievement(image,name,description){
            $('#achievement_name').html(name);
            $('#achievement_description').html(description);
            $('#achievement_image').attr('src',image);
            $('#achievementModal').modal('show');
        }

    </script>
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
