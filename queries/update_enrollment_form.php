<?php
    include '../includes/connection.php';

    if (isset($_POST['update'])) {
        $enrollment_id = $_POST['id'];
        $name = $_POST['name'];
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $address = $_POST['address'];
        $contact_number = $_POST['contact_number'];
        $emergency_contact_number = $_POST['emergency_contact_number'];
        $status = $_POST['status'];

        move_uploaded_file($image_tmp, "../images/$image");

        if (empty($image)) {
            $query = "SELECT * FROM enrollments WHERE enrollment_id='$enrollment_id'";
            $select_img = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($select_img)) {
              $image = $row['photo'];
            }
          }

        $address = mysqli_real_escape_string($connection, $address);
        
        $query = "UPDATE enrollments SET name='$name', photo='$image', address='$address', contact_number='$contact_number', emergency_contact_number='$emergency_contact_number', status='$status' WHERE enrollment_id='$enrollment_id'";

        if (!$query) {
            die("Query Failed!");
        }

        $result = mysqli_query($connection, $query);

        if ($result) {
            header('Location: ../admin/enrollments.php');
        } else {
            die("Query Connection Failed! " . mysqli_error($connection));
        }

    }

?>