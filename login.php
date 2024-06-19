<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($password === $row['password']) {
        $_SESSION['loggedin'] = true;
        header('Location: login_success.php');
        exit();
    } else {
        echo "<script>alert('Wrong Password'); window.location='login.html';</script>";
        exit();
    }
} else {
    echo "<script>alert('No Account Found! Create One'); window.location='login.html';</script>";
    exit();
}

$conn->close();
?>
