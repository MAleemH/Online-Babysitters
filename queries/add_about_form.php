<?php
    include '../includes/connection.php';

    if (isset($_POST['add'])) {

        $title = $_POST['title'];
        $description = $_POST['description'];

        $query = "INSERT INTO about (title, description) VALUES ('$title', '$description')";

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