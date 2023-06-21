<?php
    include '../includes/connection.php';

    if (isset($_POST['add'])) {

        $name = $_POST['name'];
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $description = $_POST['description'];

        move_uploaded_file($image_tmp, "../images/$image");

        $query = "INSERT INTO services (name, photo, description) VALUES ('$name', '$image', '$description')";

        if (!$query) {
            die("Query Failed!");
        }

        $result = mysqli_query($connection, $query);

        if ($result) {
            header('Location: ../admin/add_service.php');
        } else {
            die("Query Connection Failed! " . mysqli_error($connection));
        }

    }

?>