<?php
    include '../includes/connection.php';

    if (isset($_POST['add'])) {

        $name = $_POST['name'];
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $address = $_POST['address'];
        $contact_number = $_POST['contact_number'];
        $emergency_contact_number = $_POST['emergency_contact_number'];
        $type = $_POST['type'];

        move_uploaded_file($image_tmp, "../images/$image");

        $query = "INSERT INTO babysitters (name, photo, address, contact_number, emergency_contact_number, type) VALUES ('$name', '$image', '$address', '$contact_number', '$emergency_contact_number', '$type')";

        if (!$query) {
            die("Query Failed!");
        }

        $result = mysqli_query($connection, $query);

        if ($result) {
            header('Location: ../admin/add_babysitter.php');
        } else {
            die("Query Connection Failed! " . mysqli_error($connection));
        }

    }

?>