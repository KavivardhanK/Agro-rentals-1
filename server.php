<?php
$HOSTNAME = 'wp.kongu.edu';
$USERNAME = '25csec06';
$PASSWORD = '25csec06';
$DATABASE = '25csec06';

$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
