<?php
    include '../includes/connection.php';

    if (isset($_POST['update'])) {
        $contact_id = $_POST['id'];
        $email = $_POST['email'];
        $contact_number = $_POST['contact_number'];
        $address = $_POST['address'];

        $address = mysqli_real_escape_string($connection, $address);

        $query = "UPDATE contact SET email='$email', contact_number='$contact_number', address='$address' WHERE id='$contact_id'";

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