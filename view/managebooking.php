<?php
    session_start();
    if(empty($_SESSION))
    {
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>3IL Reservation</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <link rel="stylesheet" href="../stylesheet/home.css">
    </head>
    <body>

        <!-- Navigation -->
        <?php require_once("navigation.php"); ?>

        <!-- Body -->
        <div class="container-fluid">
            <div class="row">
                <?php
                    require_once("filter2.php");
                    require_once ("mesRervations.php")
                ?>
            </div>
        </div>

        <!--- Footer -->
        <?php require_once("footer.php"); ?>

    </body>
</html>