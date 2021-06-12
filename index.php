<?php include "includes/db.php"; ?>
<?php include "includes/main_header.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" href="css/prov.css?php echo time(); ?>">

</head>

<body>
  <!-- header section -->
  <header id="header2" class="fixed-top">
    <nav id="mainNavbar" class="navbar navbar-expand-md navbar-dark">
      <div class="container">
        <a href="index.php" class="navbar-brand"><i class="fas fa-plane"></i>Holiday Road</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-expanded="false">
                Destinations
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php get_destinations() ?>
              </ul>
            </li>
            <li class="nav-item">
              <a href="packages.php" class="nav-link">Packages</a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link">Contact</a>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                <?php echo ' Welcome ' . ucfirst($_SESSION['firstname']) ? $_SESSION['firstname'] : $_SESSION['firstname'] = " " ; ?>
                <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="checkout.php" class="text-dark"><i class="fa fa-fw fa-shopping-cart"></i> Shopping Cart </a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="includes/logout.php" class="text-dark"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- header section ends-->

  <!--Home Section Video-->
  <section class="showcase">
    <video src="css/albania.mp4" muted loop autoplay></video>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>Never Stop</h2>
          <h3>Exploring The World</h3>
          <p>If you’re someone who loves travel and exploring places than Holiday Road it's the right choice for you.
            It's a big world out there and we want nothing more than to share in your wonder as you discover the world,
            one place at a time.</p>
          <a href="signin.php">Join Us</a>
        </div>

      </div>

    </div>
  </section>
  <!--Home Section Video End-->

  <!-- INFO SECTION -->
  <section id="info" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <h3>About Us</h3>
          <p>Welcome to Holiday Road travel agency.We are committed creating vacations that far exceed your expectations
            and providing the best end-to-end service every step of the way.
            We’re used to breaking things down and building them back up again, until they’re even better.</p>
          <p>
            Our travel agency offers the largest selection of tours for the whole Albania
            Our friendly and professional guides will show you the best tourist sights in Albania and
            we take care of the best travel experiences of our customers from all over the World
          </p>
          <a href="about.php" class="btn btn-outline-primary btn-lg">Learn More</a>
        </div>
        <div class="col-md-6">
          <img src="css/luggage.jpg" alt="" class="img-fluid rounded shadow-lg">
        </div>
      </div>
    </div>
  </section>


  <!-- SHOWCASE SLIDER -->
  <section id="showcase">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item carousel-image-1 active">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block text-right mb-5">
              <h1 class="display-3">Experience our rocky locations.</h1>
              <p class="lead">Explore every beautiful destinations with us to fill your heart with more memories.</p>
              <a href="destination.php?id=1" class="btn btn-success btn-lg">Learn more</a>
            </div>
          </div>
        </div>

        <div class="carousel-item carousel-image-2">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block mb-5">
              <h1 class="display-3">Find a new culture .</h1>
              <p class="lead">Just plug in your destination and we will show you a whole new world.</p>
              <a href="destination.php?id=3" class="btn btn-primary btn-lg">Learn More</a>
            </div>
          </div>
        </div>

        <div class="carousel-item carousel-image-3">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block text-right mb-5">
              <h1 class="display-3">Don’t just book it,enjoy it.</h1>
              <p class="lead">We have just one mission- you and make everything possible for you.</p>
              <a href="destination.php?id=2" class="btn btn-warning btn-lg">Learn More</a>
            </div>
          </div>
        </div>
      </div>

      <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
        <span class="carousel-control-prev-icon"></span>
      </a>

      <a href="#myCarousel" data-slide="next" class="carousel-control-next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </section>

  <!-- PHOTO GALLERY -->
  <!-- <section id="gallery" class="py-5">
    <div class="container">
      <h1 class="text-center">Photo Gallery</h1>
      <p class="text-center">Check out our photos</p>
      <div class="row mb-4">
        <div class="col-md-4">
          <a href="https://source.unsplash.com/random/560x560" data-toggle="lightbox" data-gallery="img-gallery"
            data-height="560" data-width="560">
            <img src="https://source.unsplash.com/random/560x560" alt="" class="img-fluid rounded">
          </a>
        </div>

        <div class="col-md-4">
          <a href="https://source.unsplash.com/random/561x561" data-toggle="lightbox" data-gallery="img-gallery"
            data-height="561" data-width="561">
            <img src="https://source.unsplash.com/random/561x561" alt="" class="img-fluid rounded">
          </a>
        </div>

        <div class="col-md-4">
          <a href="https://source.unsplash.com/random/562x562" data-toggle="lightbox" data-gallery="img-gallery"
            data-height="562" data-width="562">
            <img src="https://source.unsplash.com/random/562x562" alt="" class="img-fluid rounded">
          </a>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md-4">
          <a href="https://source.unsplash.com/random/563x563" data-toggle="lightbox" data-gallery="img-gallery"
            data-height="563" data-width="563">
            <img src="https://source.unsplash.com/random/563x563" alt="" class="img-fluid rounded">
          </a>
        </div>

        <div class="col-md-4">
          <a href="https://source.unsplash.com/random/564x564" data-toggle="lightbox" data-gallery="img-gallery"
            data-height="564" data-width="564">
            <img src="https://source.unsplash.com/random/564x564" alt="" class="img-fluid rounded">
          </a>
        </div>

        <div class="col-md-4">
          <a href="https://source.unsplash.com/random/565x565" data-toggle="lightbox" data-gallery="img-gallery"
            data-height="565" data-width="565">
            <img src="https://source.unsplash.com/random/565x565" alt="" class="img-fluid rounded">
          </a>
        </div>
      </div>
    </div>
  </section> -->

  <section id="info" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="css/ture.jpg" alt="" class="img-fluid rounded shadow-lg">
        </div>
        <div class="col-md-6 align-self-center text-center">
          <h3>Why Chose Us?</h3>
          <p>We call ourselves the road to a holiday for a reason. It's because we're constantly looking for ways to
            make
            your life moments as perfect as possible, from the way we plan the trip to the authentic experiences you'll
            enjoy while away. Those added touches include several that no other Albanian-based travel company offers.
            We like to call it the Road to Happines.</p>
          <a href="about.php" class="btn btn-outline-primary btn-lg">Learn More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- HOME HEADING SECTION -->
  <section class="banner">
    <div class="banner-highlights">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h2>Are You Ready To Get Started?</h2>
            <p>Book your package now before the seats are taken for the best experinece</p>
          </div>
          <div class="col-md-4">
            <button type="button" class="booking-btn"><a href="packages.php">Book now</a></button>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section id="testimonials">
    <div class="container">
      <h1 class="text-center">What our clients have to say</h1>
      <p class="text-center">
        Some of many more reviews like these on our social media!
      </p>
      <div class="row">
        <div class="col-md-4">
          <p class="review"> Having spent so much time in their company we feel we have left behind new friends.
            Was sad to say goodbye to these lovely people but very much looking forward to booking agin with them
            <br> <i class="fab fa-twitter"></i> <span>@arthurshelby</span>
          </p>
          <img src="css/user1.jpg">
        </div>
        <div class="col-md-4">
          <p class="review"> The guides and drivers are very professional and friendly,
            the accomodations simply superb. I highly recommend it, Holiday Road will turn your trip into an
            unforgettable experience!
            <br> <i class="fab fa-twitter"></i> <span>@john_sh</span>
          </p>
          <img src="css/user2.jpg">
        </div>
        <div class="col-md-4">
          <p class="review"> I've been back from my trip organized by Holiday Road
            for over two weeks now, and yet, not a day goes by where I make a comment about
            how incredible of an experience it was!
            <br> <i class="fab fa-twitter"></i> <span>@tommy_sh</span>
          </p>
          <img src="css/user3.jpg">
        </div>
      </div>
    </div>
  </section>

  <!-- NEWSLETTER -->
  <section id="newsletter" class="text-center p-5 bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Sign Up For Our Newsletter</h1>
          <p>Don't miss out! Be the first to get our newsletter on new packages,exclusive offers & and get inspired for
            your next trip.</p>
          <form class="form-inline justify-content-center">
            <input type="text" class="form-control mb-2 mr-2" placeholder="Enter Name">
            <input type="text" class="form-control mb-2 mr-2" placeholder="Enter Email">
            <button class="btn btn-primary mb-2">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php include "includes/main_footer.php";?>
  <!-- FOOTER -->
  <footer id="main-footer" class="text-center p-4">
    <div class="container">
      <div class="row">
        <div class="col">
          <p>Copyright &copy;
            <span id="year"></span> Holiday Road
          </p>
        </div>
      </div>
    </div>
  </footer>

  </section>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script>
    $(function () {
      $(document).scroll(function () {
        var $nav = $("#mainNavbar");
        $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
      });
    });

    // Configure Slider
    $('.carousel').carousel({
      interval: 6000,
      pause: 'hover'
    });

    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());
  </script>
</body>

</html>