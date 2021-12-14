@extends('layouts.front')
@section('title')
    Achievement - 
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
                        <h1 class="happ justify-content-center"><b>ACHIEVEMENT</b></h1>
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
                Menampilkan {{count($achievement)}} Achievement
            </div> --}}
            @foreach ($achievement as $item)
              <div class="col-md-6 mb-4">
                  <div class="jd-content-achivement">
                      <div class="jd-content-overlay" style="border-radius:15px;"></div>
                      <img class="jd-content-image jd-member-img" width="100%" height="300"
                          src="{{Storage::url($item->image)}}">
                      <div class="jd-content-details-achivement fadeIn-bottom-2 text-white">
                          <h4>
                              <b>{{$item->name}}</b>
                          </h4>
                          <div class="d-grid gap-1">
                              <button class="btn text-white btn-sm"
                                  style="background:rgba(0, 0, 0, .1);outline: #fff solid 1px;"
                                  role="button" onclick="showModalAchievement('{{ Storage::url($item->image) }}','{{$item->name}}','{{$item->description}}')"><b>View Detail</b></button>
                          </div>
                      </div>
                  </div>
              </div>
            @endforeach
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
<br>

@endsection
@section('js')
<script>
  function showModalAchievement(image,name,description){
            $('#achievement_name').html(name);
            $('#achievement_description').html(description);
            $('#achievement_image').attr('src',image);
            $('#achievementModal').modal('show');
        }
</script>
<script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
@endsection