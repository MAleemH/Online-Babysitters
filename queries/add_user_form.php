<?php
    include '../includes/connection.php';

    if (isset($_POST['add-user'])) {

        $user_name = $_POST['user_name'];
        $user_image = $_FILES['user_image']['name'];
        $user_image_tmp = $_FILES['user_image']['tmp_name'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $user_role = $_POST['user_role'];

        move_uploaded_file($user_image_tmp, "../images/$user_image");

        $query = "INSERT INTO users (user_name, user_image, user_email, user_password, user_role) VALUES ('$user_name', '$user_image', '$user_email', '$user_password', '$user_role')";

        if (!$query) {
            die("Query Failed!");
        }

        $result = mysqli_query($connection, $query);

        if ($result) {
            header('Location: ../admin/setting.php');
        } else {
            die("Query Connection Failed! " . mysqli_error($connection));
        }

    }

?>