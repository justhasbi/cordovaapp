<?php 
    header("Access-Control-Allow-Origin: *");
    // header("Access-Control-Allow-Headers: *");
    $con = mysqli_connect("localhost", "root", "", "cordovaapp") or die ("could not connect database");
?>