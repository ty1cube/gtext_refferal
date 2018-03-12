<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keyword" content="">
  <link rel="shortcut icon" href="img/favicon.png">

 <title>@yield('title') - GText Refferal</title>
  <!-- Icons -->

      <link rel="stylesheet" href="{{ asset('css/vendors/css/font-awesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/vendors/css/simple-line-icons.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">


  <!-- Main styles for this application -->
  <link href="css/style.css" rel="stylesheet">
  <!-- Styles required by this views -->

      @yield('head')

</head>

<!-- BODY options, add following classes to body to change options

// Header options
1. '.header-fixed'					- Fixed Header

// Brand options
1. '.brand-minimized'       - Minimized brand (Only symbol)

// Sidebar options
1. '.sidebar-fixed'					- Fixed Sidebar
2. '.sidebar-hidden'				- Hidden Sidebar
3. '.sidebar-off-canvas'		- Off Canvas Sidebar
4. '.sidebar-minimized'			- Minimized Sidebar (Only icons)
5. '.sidebar-compact'			  - Compact Sidebar

// Aside options
1. '.aside-menu-fixed'			- Fixed Aside Menu
2. '.aside-menu-hidden'			- Hidden Aside Menu
3. '.aside-menu-off-canvas'	- Off Canvas Aside Menu

// Breadcrumb options
1. '.breadcrumb-fixed'			- Fixed Breadcrumb

// Footer options
1. '.footer-fixed'					- Fixed footer

-->

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
  <header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="nav navbar-nav d-md-down-none">
      <li class="nav-item px-3">
        <a class="nav-link" href="#">Dashboard</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="#">Users</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="#">Settings</a>
      </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <img src="img/avatars/6.jpg" class="img-avatar" alt="">{{-- <strong>{{ username }}</strong> --}}
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-header text-center">
           {{--  <strong>{{ username }}</strong> --}}
          </div>
          <a class="dropdown-item" href="#"><i class="fa fa-credit-card"></i> Account Details</a>
          <a class="dropdown-item" href="#"><i class="fa fa-shopping-cart"></i> Products</a>
          <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
          <a class="dropdown-item" href="#"><i class="fa fa-sign-out"></i> Logout</a>
        </div>
      </li>
    </ul>
  </header>

  <div class="app-body">
    <div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-title">
            Dashboard
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard"><i class="icon-speedometer"></i> Dashboard</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/findproducts"><i class="icon-star"></i> Find Products</a>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="/newproducts"><i class="icon-star"></i> New Products</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/transaction"><i class="icon-pie-chart"></i> Transaction History</a>
          </li

  
          <li class="nav-item">
            <a class="nav-link" href="/userprofile"><i class="icon-pie-chart"></i> Profile</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/resources"><i class="icon-pie-chart"></i> Resources</a>
          </li>


        </ul>
      </nav>
    </div>

    <!-- Main content -->
    <main class="main">

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>

      <div class="container-fluid">
        <div class="animated fadeIn">
          @yield('main')
        </div>

      </div>
      <!-- /.conainer-fluid -->
    </main>
  </div>

  <!-- Bootstrap and necessary plugins -->
  <script src="{{ asset('css/vendors/js/jquery.min.js') }}"></script>
  <script src="{{ asset('css/vendors/js/popper.min.js') }}"></script>
  <script src="{{ asset('css/vendors/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('css/vendors/js/pace.min.js') }}"></script>
  <script src="{{ asset('css/vendors/js/Chart.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/views/charts.js') }}"></script>

      @yield('footer')
</body>
</html>