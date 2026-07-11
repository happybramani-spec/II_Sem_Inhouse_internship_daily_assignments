<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
include_once __DIR__ . '/dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $new_name = mysqli_real_escape_string($conn, $_POST['name'] ?? '');

    if ($new_name === '') {
        $_SESSION['error'] = 'Name cannot be empty';
        header('Location: updatename.php');
        exit();
    }

    $user_id = $_SESSION['user_id'] ?? '';
    if ($user_id === '') {
        $_SESSION['error'] = 'User not logged in';
        header('Location: login.php');
        exit();
    }

    $updateQuery = "UPDATE user1 SET name='" . $new_name . "' WHERE id='" . $user_id . "'";
    $updateResult = mysqli_query($conn, $updateQuery);

    if ($updateResult) {
        $_SESSION['user_name'] = $new_name;
        $_SESSION['success'] = 'Name updated successfully';
        header('Location: updatename.php');
        exit();
    } else {
        $_SESSION['error'] = 'Name update failed: ' . mysqli_error($conn);
        header('Location: updatename.php');
        exit();
    }
}

?>
