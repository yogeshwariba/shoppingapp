<?php
$conn = mysqli_connect("localhost", "root", "", "clothing_store");

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}
?>
