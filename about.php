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
                        <li class="nav-item">
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
                    <h1>About Us</h1>
                    <p>We believe that travel is life-changing, that’s why we show up every day to truly do something you’ll never forget.</p>
                </div>
            </div>
        </div>
    </header>

    <!-- ABOUT SECTION -->
    <section id="about" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>What We Do</h1>
                    <p>The experiences you have and the memories you make on a Holiday Road vacation define us.We build connections.
                        We want to have an impact, which means creating mind-blowing, unforgettable vacation packages.
                        We know travel can be hard, but we also know that it’s worth it, every time when we see pleasure
                        in the eyes of our customers.When we power more travel, we unleash more opportunities to strengthen
                        connections and broaden horizons.</p>
                    <p>We're inspired by how big our world is, and by the boundless experiences you can have once you
                        get out and explore it for yourself. Holiday Road is built for people like you because we know that
                        when it’s easy to book trips and save money, you’ll travel more often and get more out of the trips
                        you take.We understand that the more we travel, the more we enrich our lives that's why we intend
                        to bring a piece of happiness from any place with you when you get home.</p>
                </div>
                <div class="col-md-6">
                    <img src="css/agency.jpg" alt="" class="img-fluid rounded-circle d-none d-md-block about-img">
                </div>
            </div>
        </div>
    </section>

    <!-- ICON BOXES -->
    <section id="icon-boxes" class="p-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card bg-warning text-white text-center">
                        <div class="card-body">
                            <i class="fas fa-award fa-3x"></i>
                            <h3>Sample He</h3>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, adipisci.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-secondary text-white text-center" id="card_even">
                        <div class="card-body">
                            <i class="fas fa-search-dollar fa-3x"></i>
                            <h3>Save your Money!</h3>
                            We are here to offer the best service on the market now and at the most competitive
                            prices!
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-warning text-white text-center">
                        <div class="card-body">
                            <i class="far fa-smile-beam fa-3x"></i>
                            <h3>Happy Clinent-Happy Life!</h3>
                            We are so proud and happy to say that we are the best reviewed agency.
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card text-white text-center" id="card_even">
                        <div class="card-body">
                            <i class="fas fa-map-marked-alt fa-3x"></i>
                            <h3>Sample Heading</h3>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, adipisci.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-warning text-white text-center">
                        <div class="card-body">
                            <i class="fas fa-battery-full fa-3x"></i>
                            <h3>Sample Heading</h3>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, adipisci.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white text-center" id="card_even">
                        <div class="card-body">
                            <i class="fas fa-globe-americas fa-3x"></i>
                            <h3>Sample Heading</h3>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, adipisci.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php include "includes/main_footer.php"; ?>