<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>

    <link rel="stylesheet" href="{{ asset('backend/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="({{ asset('backend/vendors/css/vendor.bundle.base.css') }})">

    <link rel="stylesheet" href="{{ asset('backend/vendors/jvectormap/jquery-jvectormap.css') }}}}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/owl-carousel-2/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('backend/images/favicon.png') }}" />
  </head>
  <body>
    <div class="container-scroller">

      @include('backend.layouts.sidebar')

      <div class="container-fluid page-body-wrapper">

        @include('backend.layouts.navbar')

        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$12.34</h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-success ">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Potential growth</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$17.34</h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-success">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Revenue current</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$12.34</h3>
                            <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-danger">
                            <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Daily Income</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$31.53</h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-success ">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Expense current</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            @yield('content')

          </div>

          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
            </div>
          </footer>

        </div>
      </div>
      <!-- page-body-wrapper ends -->
    </div>

    <script src="{{ asset('backend/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('backend/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('backend/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('backend/js/off-canvas.js') }}"></script>
    <script src="{{ asset('/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('backend/js/misc.js') }}"></script>
    <script src="{{ asset('backend/js/settings.js') }}"></script>
    <script src="{{ asset('backend/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('backend/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
  </body>
</html>

