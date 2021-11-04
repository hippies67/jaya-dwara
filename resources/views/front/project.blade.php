@extends('layouts.front')
@section('title')
    Project - 
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
                        <h1 class="happ justify-content-center"><b>PROJECT</b></h1>
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
            {{-- <div class="container text-left text-white mr-3 mb-3">
                Menampilkan {{count($project)}} Project
            </div> --}}
            @foreach ($project as $item)
                <div class="col-md-6 mb-4">
                    <div class="jd-content-4">
                        <div class="jd-content-overlay" style="border-radius:15px;"></div>
                        <img class="jd-content-image jd-member-img" width="100%" height="300"
                            src="{{ Storage::url($item->image) }}">
                        <div class="jd-content-details-4 fadeIn-bottom-2 text-white">
                            <h6>
                                <b>{{$item->name}}</b>
                            </h6>
                            <br>
                            <p>
                                {{Str::limit($item->description, 100)}}
                            </p>
                            <br>
                            <div class="d-grid gap-1">
                                <button class="btn text-white btn-sm"
                                    style="background:rgba(0, 0, 0, .1);outline: #fff solid 1px;"
                                    role="button" onclick="showModalDetail('{{ Storage::url($item->image) }}','{{$item->name}}','{{$item->description}}')"><b>READ MORE</b></button>
                            </div>
                            <div class="d-grid gap-1 mt-3">
                                <button class="btn btn-sm  text-dark"
                                    style="background:#fff;"
                                    role="button" onclick="showModalYoutube('{{$item->youtube}}')"><b>P L A Y</b></button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!--Modal Project-->
<div class="modal fade" id="readMoreModal" tabindex="-1" aria-labelledby="readMoreModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content" style="background-color:rgba(33, 33, 42, 0.7)">
        <div class="float-end text-right">
          <button type="button" class="btn-close-jd float-end m-2" data-bs-dismiss="modal" aria-label="Close"><span class="iconify" data-icon="ant-design:close-outlined"></span></button>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            <div class="row mb-2">
              <div class="col-md-4 col-sm-12 justify-content-center d-flex align-items-center">
                <img class="jd-content-image jd-member-img mb-3" width="100%" height="200" id="project_image"
                                      src="#">
              </div>
              <div class="col-md-8 col-sm-12 text-white">
                <h5><b id="project_name"></b></h5>
                  <br>
                  <div id="project_description"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--Modal Project-->
<div class="modal fade" id="playModal" tabindex="-1" aria-labelledby="playModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content jd-modal-transparent" style="background-color:rgba(33, 33, 42, 0.7)">
        <div class="float-end text-right">
            <button type="button" class="btn-close-jd float-end m-2" data-bs-dismiss="modal" aria-label="Close"><span class="iconify" data-icon="ant-design:close-outlined"></span></button>
          </div>
        <div class="modal-body">
          <div class="col-md-12">
            <iframe width="100%" height="500px" id="project_youtube" src="#" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
@endsection
@section('js')
<script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
<script>
    function showModalDetail(image,name,description){
        $('#project_name').html(name);
        $('#project_description').html(description);
        $('#project_image').attr('src',image);
        $('#readMoreModal').modal('show');
    }

    function showModalYoutube(youtube){
        var url = new URL(youtube);
        var c = url.searchParams.get("v");

        $('#project_youtube').attr('src','https://youtube.com/embed/'+c);
        $('#playModal').modal('show');
    }
</script>
@endsection