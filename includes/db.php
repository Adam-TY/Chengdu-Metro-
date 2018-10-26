<?php
$dbhost="localhost";
$dbuser="tang-yinhui";
$dbpass="6Efe1jvdJZ1Q";
$dbname="2201613130123";
$connection=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()){
    die("Database connection failed: " . 
        mysqli_connect_error() .
        " (". mysqli_connect_errno() . ")"
        );
}

?>