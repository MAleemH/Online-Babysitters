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
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Message</th>
                            <th scope="col">Date & Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $query = "SELECT * FROM messages";
                        $query_conn = mysqli_query($connection, $query);

                        while ($result = mysqli_fetch_assoc($query_conn)) {
                            $message_id = $result['id'];
                            $name = $result['name'];
                            $email = $result['email'];
                            $message = $result['message'];
                            $date_time = $result['created_at'];

                            ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $message_id; ?>
                                </th>
                                <td>
                                    <?php echo $name; ?>
                                </td>
                                <td>
                                    <?php echo $email; ?>
                                </td>
                                <td>
                                    <?php echo $message; ?>
                                </td>
                                <td>
                                    <?php echo $date_time; ?>
                                </td>
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