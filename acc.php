<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {

    header("Location: login_success.php");
    exit;
} else {

    header("Location: login.html");
    exit;
}
?>
