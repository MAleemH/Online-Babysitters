<?php
    include '../includes/connection.php';

    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $message = mysqli_real_escape_string($connection, $message);

        $query = "INSERT INTO messages (name, email, message) VALUES ('$name','$email', '$message')";

        if (!$query) {
            die("Query Failed!");
        }

        $result = mysqli_query($connection, $query);

        if ($result) {
            header("Location: ../contact.php");
        } else {
            die("Query Connection Failed! " . mysqli_error($connection));
        }

    }

?>