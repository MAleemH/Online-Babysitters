<?php
include '../includes/connection.php';

if (isset($_GET['delete'])) {

    $about_id = $_GET['delete'];
    $delete_query = "DELETE FROM about WHERE id = '$about_id'";
    $delete_conn = mysqli_query($connection, $delete_query);

    if ($delete_conn) {
        header("Location: ../admin/about_us.php");
    } else {
        die("About detail is not deleted! " . mysqli_error($connection));
    }

}

?>