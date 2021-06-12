<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Package_Id</th>
            <th>Package Destination Id</th>
            <th>Image</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <!-- <th>Price Reduced</th> -->
            <th>Tags</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $query = "SELECT * FROM package";
        $select_package = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($select_package)) {
            $package_id = $row['package_id'];
            $package_destination_id = $row['package_destination_id'];
            $package_image = $row['package_image'];
            $package_title = $row['package_title'];
            $package_description = $row['package_description'];
            $package_price = $row['package_price'];
            // $package_price_reduced = $row['package_price_reduced'];
            $package_tags = $row['package_tags'];

            echo "<tr>";
            echo "<td>{$package_id}</td>";
            echo "<td>{$package_destination_id}</td>";
            echo "<td><img width='100' src='images/{$package_image}' alt='image'></td>";
            echo "<td>{$package_title}</td>";
            echo "<td>{$package_description}</td>";
            echo "<td>{$package_price}</td>";
            // echo "<td>{$package_price_reduced}</td>";
            echo "<td>{$package_tags}</td>";
            echo "<td><a href='package.php?source=edit_package&p_id={$package_id}'>Edit</a></td>";
            echo "<td><a onClick=\"javascript: return confirm('Do you want to delete this package?'); \" href='package.php?delete={$package_id}'>Delete</a></td>";
            echo "</tr>";
        }
        ?>

    </tbody>
</table>

<?php
// DELETE POST FROM DATABASE:
if (isset($_GET['delete'])) {
    if (isset($_SESSION['user_role'])) {
        if ($_SESSION['user_role'] == 'admin') {
            // Store id of package for deletion in:
            $the_package_id = $_GET['delete'];

            $query = "DELETE FROM package WHERE package_id = {$the_package_id}";
            $delete_query = mysqli_query($connection, $query);
            // Refresh packages after delete:
            header("Location: package.php");
        }
    }
}

?>