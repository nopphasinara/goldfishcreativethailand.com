<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- <link rel="icon" href="../../../../favicon.ico"> -->

  <title>Pricing example for Bootstrap</title>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet" crossorigin="anonymous">
  <link href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" rel="stylesheet" crossorigin="anonymous">

  <style media="screen">
    /** Base structure*/
    html, body {
      height: 100%;
      background-color: #fff;
    }

    body {
      display: -ms-flexbox;
      display: flex;
    }

    .cover-heading {
      text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
    }

    .cover-container {
      max-width: 56em;
    }

    /** Header*/
    .masthead {
      margin-bottom: 2rem;
    }

    .masthead-brand {
      margin-bottom: 0;
    }

    .nav-masthead .nav-link {
      padding: .25rem 0;
      font-weight: 700;
      color: rgba(255, 255, 255, .5);
      background-color: transparent;
      border-bottom: .25rem solid transparent;
    }

    .nav-masthead .nav-link:hover, .nav-masthead .nav-link:focus {
      border-bottom-color: rgba(255, 255, 255, .25);
    }

    .nav-masthead .nav-link+.nav-link {
      margin-left: 1rem;
    }

    .nav-masthead .active {
      color: #fff;
      border-bottom-color: #fff;
    }

    @media (min-width: 62em) {
      .masthead-brand {
        float: left;
      }

      .nav-masthead {
        float: right;
      }
    }

    /** Cover*/
    .cover {
      padding: 0 1.5rem;
    }

    .cover-container .cover.inner {
      width: 720px;
      height: 450px;
      box-shadow: 0 0 1rem rgba(0, 0, 0, .32);
    }
  </style>
</head>
<body>

  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
      <div class="inner"></div>
    </header>

    <main role="main" class="inner cover bg-light d-flex align-items-center rounded">
      <div class="text-center">
        <h1 class="cover-heading display-4 font-weight-bold">We’ll be back soon!</h1>
        <p class="lead">Sorry for the inconvenience but we’re performing some maintenance at the moment. If you need to you can always send us a message at <a href="mailto:info@goldfishcreativethailand.com">info@goldfishcreativethailand.com</a>, otherwise we’ll be back online shortly!</p>
        <p class="lead text-secondary">
          — Goldfish Creative Thailand —
        </p>
      </div>
    </main>

    <footer class="mastfoot mt-auto">
      <div class="inner"></div>
    </footer>
  </div>

  {{-- <div class="header-section">
    <div class="header-top bg-secondary text-white d-none">
      <div class="container">
        <div class="topbar d-none d-md-block d-md-flex py-2">
          topbar
        </div>
        <!-- /.topbar -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.header-top -->

    <div class="header-bottom py-3 py-md-0 mt-md-4">
      <div class="container">
        <div class="row d-flex flex-row align-items-center">
          <div class="col-auto d-sm-none pr-0">
            <div class="dropdown">
              <button type="button" class="px-0" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-lg fa-bars"></i>
              </button>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </div>
          <div class="col col-md-auto">
            <div class="header-logo">
              <a href="#">
                <img src="https://st.hzcdn.com/res/2880/pic/houzz_logo.svg?v=2880" alt="logo">
              </a>
            </div>
            <!-- /.header-logo -->
          </div>
          <div class="col d-none d-md-block">
            <div class="header-search">
              <form id="formHeaderSearch" action="" method="GET">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text bg-transparent border-right-0">
                      <i class="fa fa-search"></i>
                    </div>
                  </div>
                  <input type="text" class="form-control border-left-0" placeholder="Search Photos, Products &amp; More...">
                </div>
              </form>
            </div>
            <!-- /.header-search -->
          </div>
          <div class="col-auto">
            <div class="header-usermenu">
              <ul class="list-inline my-0">
                <li class="list-inline-item d-md-none">
                  <a href="#">
                    <i class="fa fa-lg fa-search"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <div class="dropdown dropleft">
                    <a href="#" id="headerCartPopover" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-flip="true" data-boundry="viewport" data-offset="0,10">
                      <i class="fa fa-lg fa-shopping-cart"></i> <span class="d-none d-md-inline-flex badge badge-secondary badge-pill">0</span>
                    </a>
                    <div class="dropdown-menu rounded-0" aria-labelledby="headerCartPopover">
                      <p class="px-3 py-1 mb-0">Your shopping cart is empty.</p>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fa-stack fa-sm">
                      <i class="fa fa-stack-2x fa-circle"></i>
                      <i class="fa fa-stack-1x fa-inverse fa-user"></i>
                    </span> <span class="d-none d-md-inline-flex">Sign In</span>
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.header-usermenu -->
          </div>
        </div>
      </div>
      <!-- /.container -->

      <div class="header-menu-main d-none d-md-block mt-md-4 bg-light">
        <div class="container">
          <nav class="navbar navbar-expand navbar-light px-0 py-0">
            <div class="collapse navbar-collapse">
              <ul class="menu-main navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link px-3 py-3" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link px-3 py-3" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link px-3 py-3" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link px-3 py-3 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                    Dropdown link
                  </a>
                  <div class="dropdown-menu rounded-0" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <!-- /.container -->
      </div>
      <!-- /.header-menu-main -->
    </div>
    <!-- /.header-bottom -->
  </div>
  <!-- /.header-section -->

  <div class="main-section">
    xxx
  </div>
  <!-- /.main-section -->

  <div class="footer-section">

    <div class="footer-widget">
      xxx
    </div>
    <!-- /.footer-widget -->

    <div class="footer-top">
      xxx
    </div>
    <!-- /.footer-top -->

    <div class="footer-bottom">
      xxx
    </div>
    <!-- /.footer-bottom -->

  </div>
  <!-- /.footer-section --> --}}

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="{{ asset('js/popper.min.js') }}" crossorigin="anonymous"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}" crossorigin="anonymous"></script>
  <script src="{{ asset('js/holder.min.js') }}" crossorigin="anonymous"></script>
</body>
</html>
