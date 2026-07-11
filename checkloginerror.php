<?php
$error = "";


    $email = "";
    $password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $email = mysqli_real_escape_string($conn, $_POST["email"] ?? "");
    $password = mysqli_real_escape_string($conn, $_POST["password"] ?? "");
    

    if ($email == "" || $password == "") {
        $error = "All fields are required";
        echo $error;
    } else {
        $selectQuery = "SELECT * FROM user1 WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $selectQuery);

        if (!$result) {
            $error = "Login failed: " . mysqli_error($conn);
        } else {
            $user = mysqli_fetch_assoc($result);
            if ($user) {
                session_start();

                $_SESSION["user_id"] = $user["id"];
                $_SESSION["user_name"] = $user["name"];
                $_SESSION["user_email"] = $user["email"];


                
                if($user['role'] == 'admin'){
                    header("Location: admin/admindash.php");
                }else{
                    header("Location: dashboard.php");
                }
                exit();
            } else {
                $error = "Invalid email or password";
            }
        }
    }
}
?>