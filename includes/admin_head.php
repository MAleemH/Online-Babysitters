<?php include("../includes/connection.php"); ?>
<?php ob_start(); ?>
<?php session_start(); ?>
<?php 

  if (isset($_SESSION['user_role'])) {
    if ($_SESSION['user_role'] !== 'Admin') {
      header("Location: ../login.php");
    }
  } elseif (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin Dashboard</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/admin_index.css?v=<?php echo time(); ?>">

  <!-- Script for Services Carousel -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/2f09744991.js" crossorigin="anonymous"></script>

  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>