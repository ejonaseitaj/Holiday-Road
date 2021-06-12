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
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                Destinations
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php get_destinations() ?>
              </ul>
            </li>
            <li class="nav-item ">
              <a href="packages.php" class="nav-link">Packages</a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link">Contact</a>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                <?php echo ' Welcome ' . ucfirst($_SESSION['firstname']) ? $_SESSION['firstname'] : $_SESSION['firstname'] = " " ; ?> <b
                  class="caret"></b>
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


  <section id="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto text-center">
          <h1>Read Our Blog</h1>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, temporibus?</p>
        </div>
      </div>
    </div>
  </section>
     <!-- Packges -->
     <div class="container">
        <div class="row text-center py-5">
          <?php get_package_in_des_page();?>
        </div>
      </div>
      <!-- Endsssss -->



<?php include "includes/main_footer.php"; ?>