<?php
    include '../includes/connection.php';

    if (isset($_POST['add'])) {

        $name = $_POST['name'];
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $address = $_POST['address'];
        $contact_number = $_POST['contact_number'];
        $emergency_contact_number = $_POST['emergency_contact_number'];
        $status = $_POST['status'];
        $return_url = $_POST['return_url'];

        move_uploaded_file($image_tmp, "../images/$image");

        $address = mysqli_real_escape_string($connection, $address);

        $query = "INSERT INTO enrollments (name, photo, address, contact_number, emergency_contact_number, status) VALUES ('$name', '$image', '$address', '$contact_number', '$emergency_contact_number', 'Pending')";

        if (!$query) {
            die("Query Failed!");
        }

        $result = mysqli_query($connection, $query);

        if ($result) {
            header("Location: $return_url");
        } else {
            die("Query Connection Failed! " . mysqli_error($connection));
        }

    }

?>