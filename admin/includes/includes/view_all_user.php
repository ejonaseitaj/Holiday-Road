
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>User Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>User Role</th>
            <th>User Email</th>
            <th>User Password</th>
            <!-- <th>Confirm Password</th> -->
        </tr>
    </thead>
    <tbody>

        <?php
        $query = "SELECT * FROM user";
        $select_user = mysqli_query($connection, $query);
        
        while ($row = mysqli_fetch_assoc($select_user)) {
            $user_id = $row['user_id'];
            $user_name = $row['user_name'];
            $user_surname = $row['user_surname'];
            $user_role = $row['user_role'];
            $user_email = $row['user_email'];
            $user_password = $row['user_password'];

            
            echo "<tr>";
            echo "<td>{$user_id}</td>";
            echo "<td>{$user_name}</td>";
            echo "<td>{$user_surname}</td>";
            echo "<td>{$user_role}</td>";
            echo "<td>{$user_email}</td>";
            echo "<td>{$user_password}</td>";
            echo "<td><a href='user.php?delete={$user_id}'>Delete</a></td>";
            echo "</tr>";
        }
        ?>

    </tbody>
</table>

<?php
// DELETE POST FROM DATABASE:

if (isset($_GET['delete'])) {
    if(isset($_SESSION['user_role'])){
        if($_SESSION['user_role']=='admin'){
            // Store id of package for deletion in:
    $the_user_id = $_GET['delete'];

    $query = "DELETE FROM user WHERE user_id = {$the_user_id}";
    $delete_query = mysqli_query($connection, $query);
    // Refresh packages after delete:
    header("Location: user.php");
        }
    }
}

?>