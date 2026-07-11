<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
include_once __DIR__ . '/dbconnect.php';

$error = "";

    $new_password = "";
    $confirm_new_password = "";
    $current_password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_password = mysqli_real_escape_string($conn, $_POST["new_password"] ?? "");
    $confirm_new_password = mysqli_real_escape_string($conn, $_POST["confirm_new_password"] ?? "");
    $current_password = mysqli_real_escape_string($conn, $_POST["current_password"] ?? "");

    if ($current_password == "" || $new_password == "" || $confirm_new_password == "") {
        $error = "All fields are required";
        $_SESSION['error'] = $error;
        header("Location: updatepass.php");
        exit();
    } elseif ($new_password != $confirm_new_password) {
        $error = "New password and confirm password do not match";
        $_SESSION['error'] = $error;
        header("Location: updatepass.php");
        exit();
    } else {
        $selectQuery = "SELECT * FROM user1 WHERE id='" . ($_SESSION['user_id'] ?? '') . "'";
        $result = mysqli_query($conn, $selectQuery);

        if (!$result) {
            $error = "Password update failed: " . mysqli_error($conn);
            $_SESSION['error'] = $error;
            header("Location: updatepass.php");
            exit();
        } else {
            $user = mysqli_fetch_assoc($result);
            if ($user && $user["password"] == $current_password) {
                $updateQuery = "UPDATE user1 SET password='$new_password' WHERE id='" . ($_SESSION['user_id'] ?? '') . "'";
                $updateResult = mysqli_query($conn, $updateQuery);

                if ($updateResult) {
                    $_SESSION['success'] = "Password updated successfully";
                    header("Location: updatepass.php");
                    exit();
                } else {
                    $error = "Password update failed: " . mysqli_error($conn);
                    $_SESSION['error'] = $error;
                    header("Location: updatepass.php");
                    exit();
                }
            } else {
                $error = "Current password is incorrect";
                $_SESSION['error'] = $error;
                header("Location: updatepass.php");
                exit();
            }
        }
    }
}
?>