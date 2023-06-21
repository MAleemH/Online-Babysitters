<?php
    include '../includes/connection.php';

    if (isset($_POST['update'])) {
        $babysitter_id = $_POST['id'];
        $name = $_POST['name'];
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $address = $_POST['address'];
        $contact_number = $_POST['contact_number'];
        $emergency_contact_number = $_POST['emergency_contact_number'];
        $type = $_POST['type'];

        move_uploaded_file($image_tmp, "../images/$image");

        if (empty($image)) {
            $query = "SELECT * FROM babysitters WHERE babysitter_id='$babysitter_id'";
            $select_img = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($select_img)) {
              $image = $row['photo'];
            }
          }

        $query = "UPDATE babysitters SET name='$name', photo='$image', address='$address', contact_number='$contact_number', emergency_contact_number='$emergency_contact_number', type='$type' WHERE babysitter_id='$babysitter_id'";

        if (!$query) {
            die("Query Failed!");
        }

        $result = mysqli_query($connection, $query);

        if ($result) {
            header('Location: ../admin/babysitters.php');
        } else {
            die("Query Connection Failed! " . mysqli_error($connection));
        }

    }

?>