@extends('layouts.front')
@section('title')
    Member - 
@endsection
@section('css')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bricklayer/0.4.2/bricklayer.min.css">
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
<div class="section">
    <div class="jd-banners banner-image w-100 d-flex justify-content-center align-items-center">
        <div class="container text-white">
          <div class="col-md-12">
            <div class="row justify-content-md-center">
                <div class="col-md-3">
                    <div class="text-center text-white">
                        <a href="{{url('/')}}">
                            <img src="{{ Storage::url($logo[0]) }}" class="happ-img" alt="" width="200" height="200"
                                style="object-fit: contain">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-center justify-content-center">
                    <a href="#content" style="all:unset;cursor:pointer;">
                        <h1 class="happ justify-content-center"><b>MEMBER</b></h1>
                    </a>
                </div>
            </div>
          </div>
        </div>
      </div>
</div>
<br>
<div class="section" id="content">
    <div class="container">
        <div class="bricklayer">
            @foreach ($member as $item)
                <div class="mb-5">
                    <div class="jd-content">
                        <a style="cursor:pointer" onclick="showModalMember('{{$item->fullname}}','{{$item->position}}','{{Storage::url($item->photo)}}')">
                            <div class="jd-content-overlay" style="border-radius:15px;"></div>
                            <img class="jd-content-image jd-member-img" width="100%" style="max-height:450px;" 
                                src="{{ Storage::url($item->photo) }}">
                            <div class="jd-content-details fadeIn-bottom">
                                <h3 class="jd-content-title">{{$item->fullname}}</h3>
                                <p class="jd-content-text">{{$item->position}}</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
          </div>
    </div>
</div>
<br>
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
@endsection
@section('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/bricklayer/0.4.2/bricklayer.min.js"></script>
<script>
    var bricklayer = new Bricklayer(document.querySelector('.bricklayer'));

    function showModalMember(fullname,position,photo){
            $('#member_fullname').html(fullname);
            $('#member_position').html(position);
            $('#member_photo').attr('src',photo);
            $('#memberModal').modal('show');
        }
</script>
<script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
@endsection