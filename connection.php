<?php
    $servername = "sql311.byethost8.com";
    $username = "b8_27314253";
    $password = "JINTU1998";
    $dbname = "b8_27314253_online_house_rent";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
?> 