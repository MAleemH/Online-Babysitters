<?php

// Function to fetch the total number of babysitters
function getTotalBabysitters($connection) {
  $query = "SELECT COUNT(*) AS total_babysitters FROM babysitters";
  $result = mysqli_query($connection, $query);
  $row = mysqli_fetch_assoc($result);
  return $row['total_babysitters'];
}

// Function to fetch the total number of subscribers
function getTotalSubscribers($connection) {
  $query = "SELECT COUNT(*) AS total_subscribers FROM subscriptions";
  $result = mysqli_query($connection, $query);
  $row = mysqli_fetch_assoc($result);
  return $row['total_subscribers'];
}

// Function to fetch the total number of services
function getTotalServices($connection) {
    $query = "SELECT COUNT(*) AS total_services FROM services";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['total_services'];
}

// Function to fetch the total number of enrollments with status 'Pending'
function getTotalNewEnrollments($connection, $status) {
    $query = "SELECT COUNT(*) AS total_enrollments FROM enrollments WHERE status = '$status'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['total_enrollments'];
}

// Function to fetch the total number of enrollments with status 'Pending'
function getTotalAcceptedEnrollments($connection, $status) {
    $query = "SELECT COUNT(*) AS total_enrollments FROM enrollments WHERE status = '$status'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['total_enrollments'];
}

// Function to fetch the total number of enrollments with status 'Pending'
function getTotalRejectedEnrollments($connection, $status) {
    $query = "SELECT COUNT(*) AS total_enrollments FROM enrollments WHERE status = '$status'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['total_enrollments'];
}

?>
