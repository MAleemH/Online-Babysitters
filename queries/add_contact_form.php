<?php
    include '../includes/connection.php';

    if (isset($_POST['add'])) {

        $email = $_POST['email'];
        $contact_number = $_POST['contact_number'];
        $address = $_POST['address'];

        $address = mysqli_real_escape_string($connection, $address);

        $query = "INSERT INTO contact (email, contact_number, address) VALUES ('$email', '$contact_number', '$address')";

        if (!$query) {
            die("Query Failed!");
        }

        $result = mysqli_query($connection, $query);

        if ($result) {
            header('Location: ../admin/contact_us.php');
        } else {
            die("Query Connection Failed! " . mysqli_error($connection));
        }

    }

?>