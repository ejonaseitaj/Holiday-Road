<form action="" method="post">

    <div class="form-group">
    <label for="destination_name">Edit Destination</label>
    <?php

    if (isset($_GET['edit'])) {
        $package_destination_id = $_GET['edit'];

        $query = "SELECT * FROM destinations WHERE package_destination_id= $package_destination_id";
        $select_destination_query = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($select_destination_query)) {
            $package_destination_id = $row['package_destination_id'];
            $destination_name = $row['destination_name'];
        
    ?>
        <input value="<?php if(isset($destination_name)){echo $destination_name;} ?>" type="text" class="form-control" name="destination_name">
    <?php }} ?>

    <?php
        if (isset($_POST['update_destination'])) {
            $the_destination_name = $_POST['destination_name'];
            $query = "UPDATE destinations SET destination_name = '{$the_destination_name}' WHERE package_destination_id = {$package_destination_id}";
            $update_query = mysqli_query($connection, $query);

            if(!$update_query){
                die("Failed" . mysqli_error($connection));
            }
            header("Location: destination.php");
        }

        ?>  



    <!-- <input type="text" class="form-control" name="destination_name"> -->
    </div>
    <div class="form-group">
    <input class="btn btn-primary" type="submit" name="update_destination" value="Update Destination">
    </div>
    </form>