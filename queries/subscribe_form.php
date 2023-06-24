<?php
    include '../includes/connection.php';

    if (isset($_POST['submit'])) {

        $email = $_POST['email'];
        $start_date = date('Y-m-d');
        $end_date = date('Y-m-d', strtotime('+1 year'));
        $status = 'Active';
        $return_url = $_POST['return_url'];

        $search_email = "SELECT COUNT(*) FROM subscriptions WHERE email = '$email'";
        $search_result = mysqli_query($connection, $search_email);

        if (!$search_result) {
            die("Search Result Query Failed: " . mysqli_error($connection));
        }

        $row = mysqli_fetch_array($search_result);
        $count = $row[0];

        if ($count > 0) {

            echo "Email already exists. Please use a different email.";

        } else {

            $query = "INSERT INTO subscriptions (email, start_date, end_date, status) VALUES ('$email', '$start_date', '$end_date', '$status')";

            if (!$query) {
                die("Query Failed!");
            }

            $result = mysqli_query($connection, $query);

            if ($result) {
                header("Location: $return_url");
            } else {
                die("Query Connection Failed! " . mysqli_error($connection));
            }

        }
    }
?>