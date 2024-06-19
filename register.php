<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$name = $conn->real_escape_string($name);
$email = $conn->real_escape_string($email);
$password = $conn->real_escape_string($password);

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<script>alert('Account with the same email already exists!'); window.location='login.html#card-back';</script>";
    exit;
}

$insertSql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

if ($conn->query($insertSql) === TRUE) {
    echo "<script>alert('Registration successful!'); window.location='login.html';</script>";
} 

$conn->close();
?>


