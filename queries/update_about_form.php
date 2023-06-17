<?php
    include '../includes/connection.php';

    if (isset($_POST['update'])) {
        $about_id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        $query = "UPDATE about SET title='$title', description='$description' WHERE id='$about_id'";

        if (!$query) {
            die("Query Failed!");
        }

        $result = mysqli_query($connection, $query);

        if ($result) {
            header('Location: ../admin/about_us.php');
        } else {
            die("Query Connection Failed! " . mysqli_error($connection));
        }

    }

?>