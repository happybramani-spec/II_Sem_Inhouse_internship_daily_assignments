<?php
session_start();
if(!isset($_SESSION["user_name"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
</head>
<body>
    <header class="bg-light border-bottom py-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <a class="navbar-brand fw-bold" href="#">MyWebsite</a>

                <ul class="navbar-nav d-flex flex-row gap-3 mb-0">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>

               <a href="logout.php" class="btn btn-outline-primary">Logout</a>
            </div>
        </div>
    </header>
</body>
</html>