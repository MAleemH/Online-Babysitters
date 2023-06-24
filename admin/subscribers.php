<!-- head and sidebar -->
<?php

include '../includes/admin_head.php';
include '../includes/admin_sidebar.php';
?>

<section class="home-section">
    <!-- navbar -->
    <?php
    include '../includes/admin_navbar.php';
    ?>

    <div class="home-content">

        <div class="other-details">
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Email</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">End Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $query = "SELECT * FROM subscriptions";
                        $query_conn = mysqli_query($connection, $query);

                        while ($result = mysqli_fetch_assoc($query_conn)) {
                            $subscription_id = $result['subscription_id'];
                            $email = $result['email'];
                            $start_date = $result['start_date'];
                            $end_date = $result['end_date'];
                            $status = $result['status'];

                            ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $subscription_id; ?>
                                </th>
                                <td>
                                    <?php echo $email; ?>
                                </td>
                                <td>
                                    <?php echo $start_date; ?>
                                </td>
                                <td>
                                    <?php echo $end_date; ?>
                                </td>
                                <td>
                                    <?php echo $status; ?>
                                </td>
                                <td><a onClick="javascript: return confirm('Do you want to delete this subscription?');" href="../queries/delete_subscription_btn.php?delete=<?php echo $subscription_id; ?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                            <?php

                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
<?php
include '../includes/admin_footer.php';
?>