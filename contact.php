<?php include "includes/db.php"; ?>

<?php include "includes/main_header.php"; ?>

<body>
  <!-- header section -->
  <header id="header" class="fixed-top">
    <nav id="mainNavbar" class="navbar navbar-expand-md bg-secondary navbar-dark">
      <div class="container">
        <a href="index.php" class="navbar-brand">Holiday Road</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                Destinations
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php get_destinations() ?>
              </ul>
            </li>
            <li class="nav-item">
              <a href="packages.php" class="nav-link">Packages</a>
            </li>
            <li class="nav-item active">
              <a href="contact.php" class="nav-link">Contact</a>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                <?php echo ' Welcome ' . ucfirst($_SESSION['firstname']) ? $_SESSION['firstname'] : $_SESSION['firstname'] = " "; ?> <b class="caret"></b>
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

  <!-- PAGE HEADER -->
  <header id="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto text-center">
          <h1>Contact Us</h1>
          <p>Any questions you might have, please feel free to reach out to us!</p>
        </div>
      </div>
    </div>
  </header>


  <!-- CONTACT SECTION -->
  <section id="contact" class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card p-4">
            <div class="card-body">
              <h4>Get In Touch</h4>
              <p>You can find our main office at :</p>
              <h4>Address</h4>
              <p>Rruga e Barrikadave, Tirane, Albania, 1001</p>
              <h4>Email</h4>
              <p>ejona.seitaj@fshnstudent.info</p>
              <h4>Phone</h4>
              <p>(555) 555-5555</p>
            </div>
          </div>
        </div>
        <div class="col-md-8">

          <div class="card p-4">
            <div class="card-body">
              <h3 class="text-center">Please fill out this form to contact us</h3>
              <hr>
              <form action="" method="post">
                <?php send_message(); ?>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="First Name" name="name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Last Name" name="last_name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Email" name="email">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Phone Number" name="number">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Subject" name="subject">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea name="message" class="form-control" placeholder="Message"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="submit" name="submit" value="Submit" class="btn btn-outline-primary btn-block">
                    </div>
                    <h3><?php display_message(); ?></h3>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- STAFF -->
  <section id="staff" class="py-5 text-center bg-secondary text-white">
    <div class="container">
      <h1>Our Staff</h1>
      <hr>
      <div class="row">
        <div class="col-md-4">
          <img src="css/kozetaa.jpeg" alt="" class="img-fluid rounded-circle mb-2">
          <h4>Kozeta Pajaj</h4>
          <small>Office Manager</small>
        </div>
        <div class="col-md-4">
          <img src="css/ejona.jpg" alt="" class="img-fluid rounded-circle mb-2">
          <h4>Ejona Seitaj</h4>
          <small>Contact Manager</small>
        </div>
        <div class="col-md-4">
          <img src="css/iris.jpeg" alt="" class="img-fluid rounded-circle mb-2">
          <h4>Iris Peqini</h4>
          <small>Office Manager</small>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4">
          <img src="css/denisi.jpeg" alt="" class="img-fluid rounded-circle mb-2">
          <h4>Denis Caci</h4>
          <small>Guide</small>
        </div>
        <div class="col-md-4">
          <img src="css/donaldo.jpeg" alt="" class="img-fluid rounded-circle mb-2">
          <h4>Donaldo Qelemeni</h4>
          <small>Guide</small>
        </div>
      </div>
  </section>





  <?php include "includes/main_footer.php"; ?>