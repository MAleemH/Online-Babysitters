<?php
    include '../includes/connection.php';

    if (isset($_POST['update'])) {
        $service_id = $_POST['id'];
        $name = $_POST['name'];
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $description = $_POST['description'];

        move_uploaded_file($image_tmp, "../images/$image");

        if (empty($image)) {
            $query = "SELECT * FROM services WHERE service_id='$service_id'";
            $select_img = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($select_img)) {
              $image = $row['photo'];
            }
          }

        $description = mysqli_real_escape_string($connection, $description);

        $query = "UPDATE services SET name='$name', photo='$image', description='$description' WHERE service_id='$service_id'";

        if (!$query) {
            die("Query Failed!");
        }

        $result = mysqli_query($connection, $query);

        if ($result) {
            header('Location: ../admin/services.php');
        } else {
            die("Query Connection Failed! " . mysqli_error($connection));
        }

    }

?>