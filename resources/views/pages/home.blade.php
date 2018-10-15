<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Hello, world!</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}" crossorigin="anonymous">
</head>
<body>
  <div id="header-section" class="header-section">

    <div class="header-topbar bg-light py-2">
      <div class="container">
        <div class="row d-flex flex-row align-items-start justify-content-md-between">
          <div class="col-md-auto">
            <i class="fa fa-phone"></i> Call Us +6680-123-45678
          </div>
          <div class="col-md-auto">
            <ul class="list-inline my-0">
              <li class="list-inline-item"><a href="#">Menu</a></li>
              <li class="list-inline-item"><a href="#">Menu</a></li>
              <li class="list-inline-item"><a href="#">Menu</a></li>
              <li class="list-inline-item"><a href="#" class="btn btn-primary"><i class="fa fa-user mr-1"></i> Button</a></li>
            </ul>
          </div>
        </div>
      </div><!-- / .container -->
    </div><!-- / .header-topbar -->

    <div class="header-top py-4">
      <div class="container">
        <div class="row d-flex flex-row align-items-start justify-content-md-between">
          <div class="col-md-auto">
            <a href="#">
              <img data-src="holder.js/300x110?auto=yes&random=no&text=LOGO" alt="">
            </a>
          </div>
          <div class="col-md-auto">
            xxx
          </div>
        </div>
      </div><!-- / .container -->
    </div><!-- / .header-top -->

    <div class="header-bottom bg-success py-3 py-md-0">
      <div class="container">
        <div class="row d-flex flex-row align-items-center justify-content-between">
          <div class="col-md-auto mb-3 mb-md-0">
            <nav class="menu-main navbar navbar-expand-lg navbar-dark p-0">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item active bg-dark">
                    <a class="nav-link" href="#"><i class="fa fa-home mr-1"></i> Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropdown link
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                </ul>
              </div>
            </nav><!-- / .menu-main -->
          </div>

          <div class="col-md-auto">
            <form action="" method="GET" id="formHeaderSearch" class="formHeaderSearch">
              <div class="row no-gutters d-flex flex-row align-items-center">
                <div class="col-md-auto mr-md-2 mb-2 mb-md-0">
                  <input class="form-control form-control-lg border-success" type="search" placeholder="Title, ID, Keywords..." aria-label="Search">
                </div>
                <div class="col-md-auto">
                  <button class="btn btn-lg btn-dark w-100" type="submit"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div><!-- / .container -->
    </div><!-- / .header-bottom -->

  </div><!-- / .header-section -->

  <div id="subheader-section" class="subheader-section">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" data-src="holder.js/100px720?auto=yes&random=yes" alt="First slide">
          <div class="container">
            <div class="carousel-caption text-left">
              <h1>Example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide" data-src="holder.js/100px720?auto=yes&random=yes" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide" data-src="holder.js/100px720?auto=yes&random=yes" alt="Third slide">
          <div class="container">
            <div class="carousel-caption text-right">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </div><!-- / .subheader-section -->

  <div id="main-section" class="main-section">

    <div class="content py-5">
      <div class="container">
        <h2 class="h1 text-uppercase"><strong>Featured Listings</strong></h2>
        <hr>
        <div class="row d-flex flex-row align-items-start mt-4">
          <div class="col-12">
            <div class="card-deck">
              <div class="row d-flex flex-row align-items-center">
                @for ($i = 0; $i < 6; $i++)
                  <div class="col-12 col-sm-6 col-md-4 mb-5">
                    <div class="card border-0">
                      <img class="card-img-top" data-src="holder.js/100px240?auto=yes&random=yes&text=Image" alt="Card image cap">
                      <div class="card-body px-0">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      </div>
                      <div class="card-footer bg-white border-top-0 px-0">
                        <p class="my-0 text-muted">Last updated 3 mins ago</p>
                      </div>
                    </div>
                  </div>
                @endfor
              </div>
            </div>
          </div>
        </div>

        <div class="row d-flex flex-row align-items-start mt-5">
          <div class="col-md-9">
            <h2>Share Our 20 Year Passion for Art</h2>
            <p>At reproduction-gallery.com we have a passion for fine art and take pride in creating museum quality oil paintings. When your order is received it is assigned to an artist who excels in his or her chosen genre. This means that the artist understands the palette and technique required to complete a particular canvas. It is this meticulous attention to detail and the expertise of our artists, which sets us apart from the 'factory' style on-line galleries that crowd the net. We do not aim to be the largest or the cheapest, but we always strive to be the best.</p>

            <h2>Own a Hand Painted Fine Art Reproduction Oil Painting</h2>
            <p>Reproduction Gallery offers you the "largest choice of hand painted reproduction oil paintings for sale". Browse 12,000+ reproduction oil paintings from our online catalogue or request us to create a special commission work of art.</p>

            <p>With over 50 different genres of art available from Art-Deco to Old Masters we are able to offer a huge selection of paintings to please everyone. Paintings are offered in over 25 size options, all of which retain original size aspect ratios. We specialize in oversize canvases and the largest painting we have shipped was 17' at the widest dimension.</p>

            <p>Reproduction-Gallery.com is a family business and has been selling hand painted oil on canvas art for over 20 years. We have a large working Studio with a team of talented resident artists who are at the top of their profession. Please take a moment to see some of the paintings we have recently shipped finished paintings</p>

            <p>We have been online since 2002 during which time we have shipped to 42 countries. The knowledge we have acquired over many years, combined with a keen eye for detail, ensures that every painting which leaves the Studio is of the highest standard. Our Customer Testimonials tell the story!</p>

            <p>We have ongoing relationships with interior designers, art consultants and film-set designers all of whom trust us to provide them and their clients with the highest standard of work.</p>
          </div>
          <div class="col-md-3">
            Sidebar
          </div>
        </div>
      </div><!-- / .container -->
    </div><!-- / .content -->

  </div><!-- / .main-section -->

  <div id="footer-section" class="footer-section">

    <div class="footer-top bg-info py-5">
      <div class="container">
        <div class="row d-flex flex-row align-items-center justify-content-md-between">
          <div class="col-md text-center text-md-left">
            <p class="lead my-md-0">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Integer posuere erat a ante.
            </p>
          </div>
          <div class="col-md-auto text-center text-md-left">
            <a class="btn btn-lg btn-primary text-uppercase" href="#" role="button"><strong>Call Us Now</strong></a>
          </div>
        </div>
      </div><!-- / .container -->
    </div><!-- / .footer-top -->

    <div class="footer-widgets bg-dark py-4">

      <div class="container">
        <div class="row d-flex flex-row align-items-start">
          <div class="col-md-3">Widget</div>
          <div class="col-md-3">Widget</div>
          <div class="col-md-3">Widget</div>
          <div class="col-md-3">Widget</div>
        </div>
      </div><!-- / .container -->

    </div><!-- / .footer-widgets -->

    <div class="footer-bottom bg-secondary py-4">

      <div class="container">
        <div class="row d-flex flex-row align-items-start justify-content-md-between">
          <div class="copyright">
            <div class="col-md-auto">
              <p class="my-0">Copyright © 2018 {{ env('APP_NAME') }}. All Rights Reserved.</p>
            </div>
          </div><!-- / .copyright -->

          <div class="footer-menu">
            <div class="col-md-auto">
              <ul class="list-inline my-0">
                <li class="list-inline-item"><a href="#">Lorem ipsum</a></li>
                <li class="list-inline-item"><a href="#">Phasellus iaculis</a></li>
                <li class="list-inline-item"><a href="#">Nulla volutpat</a></li>
              </ul>
            </div>
          </div><!-- / .footer-menu -->
        </div>
      </div><!-- / .container -->

    </div><!-- / .footer-bottom -->

  </div><!-- / .footer-section -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
  {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous"></script> --}}
  <script src="{{ asset('js/app.js') }}" crossorigin="anonymous"></script>
</body>
</html>
