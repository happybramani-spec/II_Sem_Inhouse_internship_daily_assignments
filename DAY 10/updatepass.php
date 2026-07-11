<?php
// session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once __DIR__ . '/checkupdaterror.php';
}
include("dashheader.php");
include("dashvertical.php");

if (isset($_SESSION['error'])) {
    echo '<div class="container mt-3"><div class="alert alert-danger">' . htmlspecialchars($_SESSION['error']) . '</div></div>';
    unset($_SESSION['error']);
}
if (isset($_SESSION['success'])) {
    echo '<div class="container mt-3"><div class="alert alert-success">' . htmlspecialchars($_SESSION['success']) . '</div></div>';
    unset($_SESSION['success']);
}
?>

<form action="" method="POST">
       <h3 class="mb-3">Update Password</h3>

        <input type="password" name="current_password" class="form-control-mb-3" placeholder="Current Password" >
        <input type="password" name="new_password" class="form-control-mb-3" placeholder="New Password" >
        <input type="password" name="confirm_new_password" class="form-control-mb-3" placeholder="Confirm New Password" >

        <button class="btn btn-primary w-10">Update Password</button>
    </form>



<?php 
include("dashfooter.php");
include("footer.php"); ?>