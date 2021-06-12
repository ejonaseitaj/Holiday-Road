<?php 


function confirmQuery($result){
    global $connection;
    if(!$result){
        die("Query Failed" . mysqli_error($connection));
    }
}

function escape($string) {
    global $connection;  
    return mysqli_real_escape_string($connection, trim($string));   
}

function insert_destination() {
    if (isset($_POST['submit'])) {
        global $connection;
        $destination_name = $_POST['destination_name'];

        if ($destination_name == " " || empty($destination_name)) {
            echo "This field should not be empty";
        } else {
            $query = "INSERT INTO destinations (destination_name)";
            $query .= "VALUES('{$destination_name}')";

            $create_destination_query = mysqli_query($connection, $query);

            if (!$create_destination_query) {
                die("Query Failed" . mysqli_error($connection));
            }
        }
    }
}


function findAllDestinations(){
    global $connection;
    $query = "SELECT * FROM destinations";
    $select_destination = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_destination)) {
        $package_destination_id = $row['package_destination_id'];
        $destination_name = $row['destination_name'];

        echo "<tr>";
        echo "<td>{$package_destination_id}</td>";
        echo "<td>{$destination_name}</td>";
        echo "<td><a href='destination.php?delete={$package_destination_id}'>Delete</td>";
        echo "<td><a href='destination.php?edit={$package_destination_id}'>Edit</a></td>";
        echo "</tr>";
    }
}

function deleteDestinations(){
    global $connection;
    if (isset($_GET['delete'])) {
        $the_package_destination_id = $_GET['delete'];

        $query = "DELETE FROM destinations WHERE package_destination_id = {$the_package_destination_id}";
        $delete_query = mysqli_query($connection, $query);
        header("Location: destination.php");
    }
}
?>
