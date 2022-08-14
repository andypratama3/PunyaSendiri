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

    <title>Home</title>

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
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Resto Area </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="javascript:void(0)">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">Event</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">Reservasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">Location</a>
          </li>
        </ul>
        <form class="d-flex" onsubmit="return false">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</body>
</html>
