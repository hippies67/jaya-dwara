<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')JAYADWARA PERCUSSSION</title>
    <link rel="icon" href="{{asset('front/logo/logo_gram/putih.png')}}">
    <link rel="stylesheet" href="{{asset('front/bootstrap-5.0.2/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/jayadwara.css')}}">
    @yield('css')
    <link href="http://fonts.cdnfonts.com/css/gelio-fasolada" rel="stylesheet">
    <script src="{{ mix('/js/app.js') }}"></script>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: rgba(0,0,0,.2)">
        <div class="container">
          <a class="navbar-brand text-white" href="{{url('/')}}">
            <img src="{{Storage::url($web_->logo)}}" alt="" width="50" height="50" style="object-fit: contain">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          @php
            $url = explode("/", url()->current());
            if (empty($url[3])) {
            $url[3] = 'home';
            }
          @endphp
          <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto flex-nowrap">
                <li class="nav-item">
                    <a href="{{url('/')}}" class="nav-link m-2 menu-item {{($url[3] == 'home') ? 'nav-active' : null}}">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('profile')}}" class="nav-link m-2 menu-item {{($url[3] == 'profile') ? 'nav-active' : null}}">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('member')}}" class="nav-link m-2 menu-item {{($url[3] == 'member') ? 'nav-active' : null}}">Member</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('project')}}" class="nav-link m-2 menu-item {{($url[3] == 'project') ? 'nav-active' : null}}">Project</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('event')}}" class="nav-link m-2 menu-item {{($url[3] == 'event') ? 'nav-active' : null}}">Event</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('achievement')}}" class="nav-link m-2 menu-item {{($url[3] == 'achievement') ? 'nav-active' : null}}">Achievement</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('contact')}}" class="nav-link m-2 menu-item {{($url[3] == 'contact') ? 'nav-active' : null}}" >Contact</a>
                </li>
            </ul>
        </div>
        </div>
      </nav>
      
    </div>
    <div class="jayadwara-main-content">
        @yield('content')
        <div class="section blurred-modal">
            <div class="jd-banners container mt-5 mb-5 text-white">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-5 mt-3">
                                <img src="{{ Storage::url($web_->logo) }}" alt="" width="100" height="100"
                                    style="object-fit: contain">
                                <div class="mt-3">
                                    <p>{{$web_->address}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <div class="mb-5 mt-3">
                                <h4><b>Contact Us</b></h4>
                                <div class="mt-4">
                                    <p><span class="iconify" data-icon="bi:telephone"></span> &nbsp;{{$web_->phone}}
                                    </p>
                                    <p><span class="iconify" data-icon="ant-design:mail-outlined"></span>
                                        &nbsp;{{$web_->email}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mt-3 mb-5">
                                <h4><b>Follow Us</b></h4>
                                <div class="mt-4">
                                    <a href="{{$web_->instagram ?? '#'}}" target="_blank" class="btn btn-light" style="border-radius:50%">
                                        <span class="iconify" data-icon="ri:instagram-fill"></span>
                                    </a>
                                    &nbsp;
                                    <a href="{{$web_->youtube ?? '#'}}" target="_blank" class="btn btn-light" style="border-radius:50%">
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
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="{{asset('front/bootstrap-5.0.2/js/bootstrap.bundle.min.js')}}"></script>
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
    @yield('js')
    @stack('scripts')
</body>
</html>