<?php
include '../includes/connection.php';

if (isset($_GET['delete'])) {

    $enrollment_id = $_GET['delete'];
    $delete_query = "DELETE FROM enrollments WHERE enrollment_id = '$enrollment_id'";
    $delete_conn = mysqli_query($connection, $delete_query);

    if ($delete_conn) {
        header("Location: ../admin/enrollments.php");
    } else {
        die("Enrollment is not deleted! " . mysqli_error($connection));
    }

}

?>