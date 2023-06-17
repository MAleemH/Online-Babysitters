<?php
include '../includes/connection.php';

if (isset($_GET['delete'])) {

    $babysitter_id = $_GET['delete'];
    $delete_query = "DELETE FROM babysitters WHERE babysitter_id = '$babysitter_id'";
    $delete_conn = mysqli_query($connection, $delete_query);

    if ($delete_conn) {
        header("Location: ../admin/babysitters.php");
    } else {
        die("Babysitter is not deleted! " . mysqli_error($connection));
    }

}

?>