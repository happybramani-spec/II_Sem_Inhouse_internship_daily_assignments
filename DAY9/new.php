<?php
include('dbconnect.php');
$id = $_POST["id"];
$name = $_POST["name"];
$roll_no = $_POST["roll_no"];
$branch = $_POST["branch"];
$cgpa = $_POST["cgpa"];
$phone_no = $_POST["phone_no"];


echo "values received from the form are:$id, $name, $roll_no, $branch, $cgpa, $phone_no";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $roll_no = mysqli_real_escape_string($conn, $_POST["roll_no"]);
    $branch = mysqli_real_escape_string($conn, $_POST["branch"]);
    $cgpa = mysqli_real_escape_string($conn, $_POST["cgpa"]);
    $phone_no = mysqli_real_escape_string($conn, $_POST["phone_no"]);
    

    $sql = "INSERT INTO user2 (id, name, roll_no, branch, cgpa, phone_no) VALUES ('$id', '$name', '$roll_no', '$branch', '$cgpa', '$phone_no')";

    if (mysqli_query($conn, $sql)) {
        echo "student registration successful";
    } else {
        echo "error: " . mysqli_error($conn);
    }
}

?>
