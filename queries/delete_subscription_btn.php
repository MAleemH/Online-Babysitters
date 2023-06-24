<?php
include '../includes/connection.php';

if (isset($_GET['delete'])) {

    $subscription_id = $_GET['delete'];
    $delete_query = "DELETE FROM subscriptions WHERE subscription_id = '$subscription_id'";
    $delete_conn = mysqli_query($connection, $delete_query);

    if ($delete_conn) {
        header("Location: ../admin/subscribers.php");
    } else {
        die("Subscription is not deleted! " . mysqli_error($connection));
    }

}

?>