<?php
/*
 * File php untuk menyambungkan ke database localhost
 * 
 */
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "perpus_online";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?> 