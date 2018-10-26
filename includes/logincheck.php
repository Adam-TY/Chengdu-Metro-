<?php
session_start();
if (!isset($_SESSION['login_user'])) {
    header('location: login.php');
}
if (!isset($_SESSION['login_level'] >= $pagelevel)) {
    echo "yes, permission";
} else{
    header('location: error.php');
}
?>