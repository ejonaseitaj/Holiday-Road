<?php
if (isset($_POST['create_user'])) {

    //getting data from the form and assigning them and escapind at the same time through the function escape()
    $user_name         = escape($_POST['user_name']);
    $user_surname      = escape($_POST['user_surname']);
    $user_role         = escape($_POST['user_role']);
    $user_email        = escape($_POST['user_email']);
    $user_password     = escape($_POST['user_password']);

    $user_password = password_hash($user_password, PASSWORD_BCRYPT, array('cost' => 12));

    $query = "INSERT INTO user(user_name,user_surname,user_role,user_email,user_password)";

    $query .= "VALUES('{$user_name}','{$user_surname}','{$user_role}','{$user_email}','{$user_password}')";

    $create_user_query = mysqli_query($connection, $query);
    confirmQuery($create_user_query);

    echo "User Created: " . " " . "<a href='user.php'>View Users</a> ";
    
}

?>

<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="user_name">User Name</label>
        <input type="text" class="form-control" name="user_name" required>
    </div>

    <div class="form-group">
        <label for="user_surname">User Surname</label>
        <input type="text" class="form-control" name="user_surname" required>
    </div>
    <div class="form-group">

        <select name="user_role" id="">
            <option value="client">Select Options</option>
            <option value="admin">Admin</option>
            <option value="client">Client</option>
        </select>
    </div>

    <div class="form-group">
        <label for="user_email">User Email</label>
        <input type="email" class="form-control" name="user_email" required>
    </div>

    <div class="form-group">
        <label for="user_password">User Password</label>
        <input type="password" class="form-control" name="user_password" required minlength="8">
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_user" value="Create User">
    </div>
</form>