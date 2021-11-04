@extends('layouts.front')
@section('title')
    Profile - 
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
                        <h1 class="happ justify-content-center"><b>PROFILE</b></h1>
                    </a>
                </div>
            </div>
          </div>
        </div>
      </div>
</div>
<br>
<div class="section" id="content">
    <br><br><br>
    <div class="jd-banners container mt-2 mb-2 text-white">
        <div class="col-md-12">
            <div class="row container">
                {!! $profile->description !!}
            </div>
        </div>
    </div>
    <br><br><br>
</div>
<br>
@endsection
@section('js')
<script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
@endsection