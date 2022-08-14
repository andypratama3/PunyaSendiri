
<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{!!asset('assetsMaster/')!!}"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>@yield('title')</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{!!asset('assetsMaster/img/favicon/favicon.ico')!!}"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"/>

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{!!asset('assetsmaster/vendor/fonts/boxicons.css')!!}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{!!asset('assetsmaster/vendor/css/core.css')!!}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{!!asset('assetsMaster/vendor/css/theme-default.css')!!}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{!!asset('assetsMaster/css/demo.css')!!}"/>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{!!asset('assetsMaster/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')!!}"/>

    <link rel="stylesheet" href="{!!asset('assetsMaster/vendor/libs/apex-charts/apex-charts.css')!!}"/>

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{!!asset('assetsMaster/vendor/js/helpers.js')!!}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{!!asset('assetsMaster/js/config.js')!!}"></script>
  </head>

  <body>
    <!-- Content -->
    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="/Login" class="app-brand-link gap-2">
                  </span>
                  <span class="app-brand-text demo text-body fw-bolder">Login</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Welcome to Bor Data</h4>
              <p class="mb-4">Please sign-in to your account and start the adventure</p>

              <form class="mb-3" action="/Register/True" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="email"
                      name="name"
                      placeholder="Enter your name"
                      autofocus
                    />
                  </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                    autofocus
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    <a href="auth-forgot-password-basic.html">
                      <small>Forgot Password?</small>
                    </a>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Register</button>
                </div>
              </form>

              <p class="text-center">
                <a href="/Login">
                  <span>Login</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>


<!-- build:jsassetsMastermaster/vendor/js/core.js -->
<script src="{!!asset('assetsmaster/vendor/libs/jquery/jquery.js')!!}"></script>
<script src="{!!asset('assetsmaster/vendor/libs/popper/popper.js')!!}"></script>
<script src="{!!asset('assetsmaster/vendor/js/bootstrap.js')!!}"></script>
<script src="{!!asset('assetsmaster/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')!!}"></script>

<script src="{!!asset('assetsmaster/vendor/js/menu.js')!!}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{!!asset('assetsmaster/vendor/libs/apex-charts/apexcharts.js')!!}"></script>

<!-- Main JS -->
<script src="{!!asset('assetsmaster/js/main.js')!!}"></script>

<!-- Page JS -->
<script src="{!!asset('assetsmaster/js/dashboards-analytics.js')!!}"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>


