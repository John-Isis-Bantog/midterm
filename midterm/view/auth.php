<?php
function checkLogin() {
    session_start();
    if (!isset($_SESSION['user'])) {
        header('location:view/login.php');
        exit();
    }
}
?>