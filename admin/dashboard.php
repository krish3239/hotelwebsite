<?php
require('inc/essentials.php');
adminLogin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <?php require('inc/links.php'); ?>
</head>

<body>

    <div class="conatiner-fluid bg-primary d-flex align-item-center justify-content-between p-3">
        <h3 style="color: white;">Taj Hotel</h3>
        <a href="logout.php" class="btn btn-light">Log Out</a>
    </div>

    <div class="col-lg-2 bg-secondary border-top border-3 border-secondary">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid flex-lg-column ms-2">
                <h2 style="color:white; justify-content:center">Admin Panel</h2>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#admin" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="d-flex flex-column">
                        <span class="navbar-toggler-icon"><i class="bi bi-list"></i></span>

                    </div>


                </button>
                <div class="collapse navbar-collapse flex-column align-items-stretch py-2 w-100" style="font-size:30px"  id="admin">

                    <ul class="nav nav-pills flex-column" style="height:100vh ; " >
                        <li class="text-white" style="border-bottom: 2px solid black;"><a href="#" class="text-white text-decoration-none align-item-stretch">Dashboard</a></li>
                        <li class="text-white"style="border-bottom: 2px solid black;><a href="#" class="text-white text-decoration-none">User</a></li>
                        <li class="text-white"style="border-bottom: 2px solid black;><a href="#" class="text-white text-decoration-none">Rooms</a></li>
                    </ul>

                </div>
            </div>
        </nav>

    </div>

    <?php require('inc/scripts.php'); ?>
</body>

</html>