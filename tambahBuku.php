<?php 
include 'databaseConnection.php';

    $sql = "INSERT INTO anggota (no_anggota, nama)
    VALUES ('000003', 'Rizza Kingkin')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>