@extends('layouts.front')
@section('title')
    Event - 
@endsection
@section('css')
<style>
    .banner-image {
        background-image: linear-gradient(transparent, #21212A), linear-gradient(to top, transparent, #21212A),url('{{Str::replace("public","storage",$banner->image)}}');
        background-size:cover;
        background-position: 80% 20%;
        height:500px;
    }
  </style>
@endsection
@section('content')
<div class="section blurred-modal">
    <div class="jd-banners banner-image w-100 d-flex justify-content-center align-items-center" >
        <div class="container text-white">
          <div class="col-md-12">
            <div class="row justify-content-md-center">
                <div class="col-md-3">
                    <div class="text-center text-white">
                        <a href="{{url('/')}}">
                            <img src="{{ asset('front/logo/logo_gram_nama/putih.png') }}" class="happ-img" alt="" width="200" height="200"
                                style="object-fit: contain">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-center justify-content-center">
                    <a href="#content" style="all:unset;cursor:pointer;">
                        <h1 class="happ justify-content-center"><b>EVENT</b></h1>
                    </a>
                </div>
            </div>
          </div>
        </div>
      </div>
</div>
<br>
<div class="section" id="content">
    <div class="container blurred-modal">
        <div class="row">
            {{-- <div class="text-left text-white m-3">
                Menampilkan {{count($event)}} Event
            </div> --}}
            @foreach ($event as $item)
            <div class="col-md-6 mb-4">
                <a onclick="showModalEvent('{{Storage::url($item->image)}}','{{$item->name}}','{{$item->location}}','{{date('Y', strtotime($item->date))}}')" style="cursor: pointer">
                  <div class="jd-content-2">
                      <div class="jd-content-overlay" style="border-radius:15px;"></div>
                      <img class="jd-content-image jd-member-img" width="100%" height="400"
                          src="{{ Storage::url($item->image) }}">
                      <div class="jd-content-details-event-1 fadeIn-bottom">
                        <h3><b>{{$item->name}}</b></h3>
                        <h5><b>{{$item->location}} {{date('Y', strtotime($item->date))}}</b></h5>
                      </div>
                  </div>
                </a>
              </div>
            @endforeach
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
<br>
@endsection
@section('js')
<script>
      function showModalEvent(image,name,location,tahun){
          $('#event_name').html(name);
          $('#event_image').attr('src',image);
          $('#event_location').html(location);
          $('#event_tahun').html(tahun);
          $('#eventModal').modal('show');
      }
</script>
<script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
@endsection