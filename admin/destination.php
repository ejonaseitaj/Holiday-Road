<?php include "includes/admin_header.php"; ?>


<div id="wrapper">


    <!-- Navigation -->
    <?php include "includes/admin_navigation.php"; ?>


    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome to Admin Page
                        <small>Author</small>
                    </h1>

                    <div class="col-xs-6">

                        <?php insert_destination(); ?>

                        <!-- Add Destination -->
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="destination_name">Destination Name</label>
                                <input type="text" class="form-control" name="destination_name">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add Destination">
                            </div>
                        </form>

                        <?php  //Update and Include Query
                        if (isset($_GET['edit'])) {
                            $package_destination_id = $_GET['edit'];
                            include "includes/update_destination.php";
                        }
                        ?>
                    </div>


                    <div class="col-xs-6">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Destination Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php findAllDestinations(); ?>
                                    <?php deleteDestinations(); ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php include "includes/admin_footer.php"; ?>