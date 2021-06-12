<?php include "includes/db.php"; ?>

<?php include "includes/main_header.php"; ?>

<?php
if ($_SESSION['user_role'] == '') {
    redirect("signin.php");
}
?>

<body>
<!-- Navbar section -->
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
    <!-- Navbar section ends-->
    <!-- PAGE HEADER -->
    <header id="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto text-center">
                    <h1>Checkout Page</h1>
                    <p>Buy the best your money can buy!</p>
                </div>
            </div>
        </div>
    </header>


    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-auto ">
                <h2>Checkout Order Detail</h2>

                <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="business" value="ejonaseitaj@gmail.com">
                    <input type="hidden" name="currency_code" value="USD">
                    <input type="hidden" name="upload" value="1">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Package Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Sub-total</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php cart(); ?>
                        </tbody>
                    </table>
                    <input type="image" name="upload" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">

                </form>
            </div>

        </div>
        <div class="row">
            <div class="col-md-8 m-auto text-center">
            </div>
            <div class="col-md-4 pull-right ">
                <h2>Cart Totals</h2>

                <table class="table table-bordered" cellspacing="0">

                    <tr class="cart-subtotal">
                        <th>Items:</th>
                        <td><span class="amount"><?php
                                                    echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0"; ?></span></td>
                    </tr>

                    <tr class="order-total">
                        <th>Order Total</th>
                        <td><strong><span class="amount">
                                    &#36;<?php echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0"; ?>
                                </span></strong> </td>
                    </tr>

                    </tbody>

                </table>

            </div>
        </div>

    </div>




    <!-- FOOTER -->
    <!-- <footer id="main-footer" class="text-center p-4 ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p>Copyright &copy;
                        <span id="year"></span> Holiday Road
                    </p>
                </div>
            </div>
        </div>
    </footer> -->

    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $(document).scroll(function() {
                var $nav = $("#mainNavbar");
                $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
            });
        });

        // Get the current year for the copyright
        $('#year').text(new Date().getFullYear());
    </script>
</body>

</html>