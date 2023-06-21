<?php
include '../includes/connection.php';

if (isset($_GET['delete'])) {

    $service_id = $_GET['delete'];
    $delete_query = "DELETE FROM services WHERE service_id = '$service_id'";
    $delete_conn = mysqli_query($connection, $delete_query);

    if ($delete_conn) {
        header("Location: ../admin/services.php");
    } else {
        die("Service is not deleted! " . mysqli_error($connection));
    }

}

?>