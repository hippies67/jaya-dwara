@extends('layouts.front')
@section('title')
    Contact - 
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
                            <img src="{{ asset('front/logo/logo_gram_nama/putih.png') }}" class="happ-img" alt="" width="200" height="200"
                                style="object-fit: contain">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-center justify-content-center">
                    <a href="#content" style="all:unset;cursor:pointer;">
                        <h1 class="happ justify-content-center"><b>CONTACT</b></h1>
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
    <div class="jd-banners container mt-1 mb-5 text-white">
        <div class="row justify-content-md-center container">
            <div class="col-md-12">
                @if (session('success'))
                    <div class="text-center">
                        <h3>
                            {{ session('success') }}
                        </h3>
                    </div>
                @endif
                @if (session('danger'))
                    <div class="text-center">
                        <h3>
                            {{ session('danger') }}
                        </h3>
                    </div>
                @endif
            </div>
                <div class="col-md-8" id="formContact">
                <form action="{{route('contact.store')}}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <h5>Subject <sup class="text-danger" title="Wajib Diisi" style="cursor:help">*</sup> </h5>
                        <input type="text" name="subject" class="form-control" style="background: rgba(0,0,0,.1);color:white" placeholder="...">
                        @error('subject')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <h5>Isi <sup class="text-danger" title="Wajib Diisi" style="cursor:help">*</sup></h5>
                        <textarea name="description" class="form-control" style="background: rgba(0,0,0,.1);color:white" id="" cols="30" rows="10">...</textarea>
                        @error('description')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <h5>Nama <sup class="text-danger" title="Wajib Diisi" style="cursor:help">*</sup> </h5>
                                <input type="text" class="form-control" name="nama" style="background: rgba(0,0,0,.1);color:white" placeholder="...">
                                @error('nama')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <h5>Email <sup class="text-danger" title="Wajib Diisi" style="cursor:help">*</sup> </h5>
                                <input type="text" name="email" class="form-control" style="background: rgba(0,0,0,.1);color:white" placeholder="...">
                                @error('email')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <h5>Capctha <sup class="text-danger" title="Wajib Diisi" style="cursor:help">*</sup> </h5>
                                <span id="captcha_img">{!! captcha_img() !!}</span>
                                <button type="button" class="btn btn-danger" class="reload" id="reload">
                                    &#x21bb;
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <h5>Enter Capctha <sup class="text-danger" title="Wajib Diisi" style="cursor:help">*</sup> </h5>
                                <input id="captcha" type="text" class="form-control" style="background: rgba(0,0,0,.1);color:white" placeholder="Enter Captcha" name="captcha">
                                @error('captcha')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mt-1">
                        <button type="submit" class="btn btn-md text-white float-end jd-submit"
                            style="background:rgba(0, 0, 0, .1);outline: #fff solid 2px;">Submit..</button>
                    </div>
                </form>
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
@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
                $("#captcha_img").html(data.captcha);
            }
        });
    });
</script>
@if (session('success') || session('danger'))
<script>
    $('#formContact').css("display", "none");
</script>
@endif
@endpush