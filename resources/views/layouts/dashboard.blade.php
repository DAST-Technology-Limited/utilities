<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
  <link rel="stylesheet" href="{{asset('dashboard/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css')}}">
  <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{asset('dashboard/css/fonts/flaticon/font/Flaticon.ttf')}}">
  <link rel="stylesheet" href="{{asset('dashboard/css/fonts/icomoon/fonts/icomoon1a44.svg')}}">
  <link rel="stylesheet" href="{{asset('dashboard/css/fonts/icomoon/fonts/icomoon1a44.eot')}}">
  <link rel="stylesheet" href="{{asset('dashboard/css/dashboard.css')}}">
</head>
<body>
@livewireStyles

@include("components.preloader")


    <div style="
  background: linear-gradient(#9C27B0,#009688);
    
    " class="container-scroller">
        <nav style="
  background: rgb(4, 2, 29);
        
        "   class="sidebar sidebar-offcanvas" id="sidebar">
            <div style="
            background: rgb(4, 2, 29);
                  
                  "   class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
              <a class="sidebar-brand brand-logo" href="/"><h1 class="text-light">Dashboard</h1></a>
              <a class="sidebar-brand brand-logo-mini" href="/"><h1>Dashboard</h1></a>
            </div>
            <ul class="nav">
              <li class="nav-item profile">
                <div class="profile-desc">
                  <div class="profile-pic">
                    <div class="count-indicator">
                      <img class="img-xs rounded-circle " src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZhSGWGJePk37KjtmeLgjgy0hp5zq_zFHkSw&usqp=CAU" alt="">
                      <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                      <h5 class="mb-0 font-weight-normal">{{ucfirst(explode(" ", Auth::user()->name)[0])}}</h5>


                      <span>@php
                        $roleNames = [
                            1 => 'User',
                            2 => 'Editor',
                            3 => 'Admin',
                        ];
                    @endphp
                    
                    {{ ucfirst($roleNames[Auth::user()->level_id]) }}
                    
                      </span>
                      
                    </div>
                  </div>
                  
                </div>
              </li>
              <li class="nav-item nav-category">
                <span class="nav-link">Navigation</span>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="/home">
                  <span class="menu-icon">
                    <i class="bi bi-plus text-light"></i>
                  </span>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="/dashboard/funding" aria-expanded="false" aria-controls="ui-basic">
                  <span class="menu-icon">
                  <i class="bi bi-currency-dollar text-danger"></i>
                  </span>
                  <span class="menu-title">Funding</span>
                 
                </a>
              
              </li>
              
              <li class="nav-item menu-items">
                <a class="nav-link" href="/dashboard/airtime">
                  <span class="menu-icon">
                    <i class="bi bi-phone"></i>
                  </span>
                  <span class="menu-title">Airtime</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="/dashboard/data">
                  <span class="menu-icon">
                    <i class="bi bi-wifi"></i>
                  </span>
                  <span class="menu-title">Data Plan</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="/dashboard/electricity">
                  <span class="menu-icon">
                    <i class="bi bi-lightbulb"></i>
                  </span>
                  <span class="menu-title">Electricity</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="/dashboard/tx-history">
                  <span class="menu-icon">
                    <i class="bi bi-clock-history"></i>
                  </span>
                  <span class="menu-title">Transactions</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="#">
                  <span class="menu-icon">
                    <i class="bi bi-person "></i>
                  </span>
                  <span class="menu-title">Profiles</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="#">
                  <span class="menu-icon">
                    <i class="bi bi-book-fill text-light"></i>
                  </span>
                  <span class="menu-title">About</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="/blogs" aria-expanded="false" aria-controls="auth">
                  <span class="menu-icon">
                    <i class="bi bi-pen-fill text-light"></i>
              
                  </span>
                  <span class="menu-title">Blogs</span>
                 
                </a>
             
              </li>
              @if (Auth::user() && in_array(Auth::user()->level_id, [2, 3]))
    <li class="nav-item menu-items">
        <a class="nav-link" href="/admin">
            <span class="menu-icon">
                <i class="bi bi-box text-light"></i>
            </span>
            <span class="menu-title">Admin/Editor</span>
        </a>
    </li>
@endif









              <li style="margin-left:2.3rem;" class="nav-item dropdown">
              

                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  <i class="bi bi-box-arrow-right text-light"></i>
                  {{-- {{ucfirst(explode(" ", Auth::user()->name)[0])}} --}}
                </a>
                
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a style="background: rgb(92, 4, 4);" class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
       






            </ul>
          </nav>

          
      <div class="container-fluid page-body-wrapper">
        <nav class="navbar p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
              <a class="navbar-brand brand-logo-mini" href="/"><h1 class="text-light">Dashboard</h1></a>
            </div>
            <div style="
            background: rgb(4, 2, 29);
                  
                  "   class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
              <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
               
              </button>
              <ul style="
              background: rgb(4, 2, 29);
                    
                    "   class="navbar-nav w-100">
                <li class="nav-item w-100">
                  <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                    <input style="
  background: rgb(4, 2, 29);
        
       color:white; "   type="text" class="form-control" placeholder="Search products">
                  </form>
                </li>
              </ul>
              <ul class="navbar-nav navbar-nav-right">
             
                <li class="nav-item ">
                  <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                    <div class="navbar-profile">
                      <img class="img-xs rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZhSGWGJePk37KjtmeLgjgy0hp5zq_zFHkSw&usqp=CAU" alt="">
                      <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ucfirst(explode(" ", Auth::user()->name)[0])}}</p>
                    </div>
                  </a>
                
                </li>
              </ul>
              <button onclick="toggleNav()" class="navbar-toggler text-light navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="bi bi-list text-light" style="color: white;"></span>
              </button>
            </div>
          </nav>
        
          @yield("content")

      </div>

    </div>

  @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="{{asset('dashboard/js/js.js')}}"></script>
</body>
</html>