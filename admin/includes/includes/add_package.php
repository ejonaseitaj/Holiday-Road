<?php
if (isset($_POST['create_package'])) {

    $package_destination_id = $_POST['package_destination_id'];
    $package_title = $_POST['package_title'];

    $package_image = $_FILES['image']['name'];
    $package_image_temp = $_FILES['image']['tmp_name'];

    $package_description = $_POST['package_description'];
    $package_price = $_POST['package_price'];

    $package_tags = $_POST['package_tags'];

    move_uploaded_file($package_image_temp, "./images/$package_image");

    $query = "INSERT INTO package(package_destination_id,package_image,package_title,
    package_description,package_price,package_tags)";

    $query .= "VALUES('{$package_destination_id}','{$package_image}','{$package_title}',
'{$package_description}','{$package_price}','{$package_tags}')";

    $create_post_query = mysqli_query($connection, $query);
    confirmQuery($create_post_query);
}

?>

<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="package_destination_id">Package Destination Id</label>
        <input type="text" class="form-control" name="package_destination_id">
    </div>

    <div class="form-group">
        <label for="package_image">Package Image</label>
        <input type="file" name="image">
    </div>

    <div class="form-group">
        <label for="package_title">Package Title</label>
        <input type="text" class="form-control" name="package_title">
    </div>

    <div class="form-group">
        <label for="package_description">Post Content</label>
        <textarea class="form-control" name="package_description" id="" rows="10" cols="30"></textarea>
    </div>

    

    <div class="form-group">
        <label for="package_price">Package Price</label>
        <input type="text" class="form-control" name="package_price">
    </div>

    <div class="form-group">
        <label for="package_tags">Package Tags</label>
        <input type="text" class="form-control" name="package_tags">
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_package" value="Publish Package">
    </div>
</form>