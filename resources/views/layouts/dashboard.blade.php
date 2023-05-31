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
    


    <div class="container-scroller">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
              <a class="sidebar-brand brand-logo" href="/"><h1 class="text-light">{{env("APP_NAME")}}</h1></a>
              <a class="sidebar-brand brand-logo-mini" href="/"><h1>{{env("APP_NAME")}}</h1></a>
            </div>
            <ul class="nav">
              <li class="nav-item profile">
                <div class="profile-desc">
                  <div class="profile-pic">
                    <div class="count-indicator">
                      <img class="img-xs rounded-circle " src="{{asset('dashboard/assets/img/profile.jfif')}}" alt="">
                      <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                      <h5 class="mb-0 font-weight-normal">{{ucfirst(explode(" ", Auth::user()->name)[0])}}</h5>
                      <span>Gold Member</span>
                    </div>
                  </div>
                  
                </div>
              </li>
              <li class="nav-item nav-category">
                <span class="nav-link">Navigation</span>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="/">
                  <span class="menu-icon">
                    <i class="bi bi-plus text-light"></i>
                  </span>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="ui-basic">
                  <span class="menu-icon">
                  <i class="bi bi-person text-danger"></i>
                  </span>
                  <span class="menu-title">Our Team</span>
                 
                </a>
              
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="#">
                  <span class="menu-icon">
                    <i class="bi bi-file"></i>
                  </span>
                  <span class="menu-title">Form Elements</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="#">
                  <span class="menu-icon">
                    <i class="bi bi-table"></i>
                  </span>
                  <span class="menu-title">Tables</span>
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
                <a class="nav-link" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="auth">
                  <span class="menu-icon">
                    <i class="bi bi-pen-fill text-light"></i>
              
                  </span>
                  <span class="menu-title">User Pages</span>
                 
                </a>
             
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="#">
                  <span class="menu-icon">
                    <i class="bi  bi-box text-light"></i>
                  </span>
                  <span class="menu-title">Documentation</span>
                </a>
              </li>
            </ul>
          </nav>

          
      <div class="container-fluid page-body-wrapper">
        <nav class="navbar p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
              <a class="navbar-brand brand-logo-mini" href="/"><h1 class="text-light">{{env("APP_NAME")}}</h1></a>
            </div>
            <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
              <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
               
              </button>
              <ul class="navbar-nav w-100">
                <li class="nav-item w-100">
                  <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                    <input type="text" class="form-control" placeholder="Search products">
                  </form>
                </li>
              </ul>
              <ul class="navbar-nav navbar-nav-right">
             
                <li class="nav-item ">
                  <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                    <div class="navbar-profile">
                      <img class="img-xs rounded-circle" src="{{asset('dashboard/assets/img/face-1.jfif')}}" alt="">
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="{{asset('dashboard/js/js.js')}}"></script>
</body>
</html>