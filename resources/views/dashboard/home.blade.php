@extends('layouts.dashboard')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card corona-gradient-card">
                <div class="card-body py-0 px-0 px-sm-3">
                  <div class="row align-items-center">
                    <div class="col-4 col-sm-3 col-xl-2">
                      <img src="assets/img/port1.jpg" class="gradient-corona-img img-fluid" alt="">
                    </div>
                    <div class="col-5 col-sm-7 col-xl-8 p-0">
                      <h4 class="mb-1 mb-sm-0">Want even more features clem!!?</h4>
                      <p class="mb-0 font-weight-normal d-none d-sm-block">Stay connected and get news letters!</p>
                    </div>
                    <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                      <span>
                        <a href="#" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Upgrade to PRO</a>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            @foreach($currencies as $currency)
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">
                          @if(isset(Auth::user()->wallet()->getBalances()->{$currency->symbol}))
                          {{Auth::user()->wallet()->getBalances()->{$currency->symbol} }}
                          @else
                          0.0
                          @endif
                        </h3>
                        <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-box-success ">
                        <span class="bi bi-arrow-up icon-item"></span>
                      </div>
                    </div>
                  </div>
                  <h6 class="text-muted font-weight-normal">{{strtoupper($currency->symbol)}}</h6>
                </div>
              </div>
            </div>
            @endforeach

            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0"> 0.0</h3>
                        <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-box-success ">
                        <span class="bi bi-arrow-up icon-item"></span>
                      </div>
                    </div>
                  </div>
                  <h6 class="text-muted font-weight-normal">Referral Bonus</h6>
                </div>
              </div>
            </div>
          </div>


          <div class="row text-center p-5">
            <div class="col-12">
              <div class="text-center">
                <h1>Purchase Utilities</h1>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 col-sm-6 col-md-3 mb-3"><a href="/dashboard/airtime"><img src="{{asset('/images/s_topup.jpg')}}" class="w-100" alt=""></a></div>
            <div class="col-12 col-sm-6 col-md-3 mb-3"><a href="/dashboard/data"><img src="{{asset('/images/s_mtnsmedata.jpg')}}" class="w-100" alt=""></a></div>
            <div class="col-12 col-sm-6 col-md-3 mb-3"><a href="/dashboard/data"><img src="{{asset('/images/s_airsmedata.jpg')}}" class="w-100" alt=""></a></div>
            <div class="col-12 col-sm-6 col-md-3 mb-3"><a href="/dashboard/data"><img src="{{asset('/images/s_glo.jpg')}}" class="w-100" alt=""></a></div>
            <div class="col-12 col-sm-6 col-md-3 mb-3"><a href="/dashboard/data"><img src="{{asset('/images/s_bundles.jpg')}}" class="w-100" alt=""></a></div>
            <div class="col-12 col-sm-6 col-md-3 mb-3"><a href=""><img src="{{asset('/images/s_gotv.jpg')}}" class="w-100" alt=""></a></div>
            <div class="col-12 col-sm-6 col-md-3 mb-3"><a href=""><img src="{{asset('/images/s_dstv.jpg')}}" class="w-100" alt=""></a></div>
            <div class="col-12 col-sm-6 col-md-3 mb-3"><a href=""><img src="{{asset('/images/s_startimes.jpg')}}" class="w-100" alt=""></a></div>
            <div class="col-12 col-sm-6 col-md-3 mb-3"><a href=""><img src="{{asset('/images/s_neco.jpg')}}" class="w-100" alt=""></a></div>
            <div class="col-12 col-sm-6 col-md-3 mb-3"><a href=""><img src="{{asset('/images/s_waec.jpg')}}" class="w-100" alt=""></a></div>
          </div>

        </div>
        <!-- content-wrapper ends -->

      </div>
    </div>
  </div>
</div>
@endsection