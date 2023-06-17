<?php
include '../includes/connection.php';

if (isset($_GET['delete'])) {

    $contact_id = $_GET['delete'];
    $delete_query = "DELETE FROM contact WHERE id = '$contact_id'";
    $delete_conn = mysqli_query($connection, $delete_query);

    if ($delete_conn) {
        header("Location: ../admin/contact_us.php");
    } else {
        die("Contact detail is not deleted! " . mysqli_error($connection));
    }

}

?>