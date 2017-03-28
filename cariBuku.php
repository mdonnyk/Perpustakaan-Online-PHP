<?php
include 'databaseConnection.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    $sql = "SELECT * FROM buku";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "isbn: " . $row["isbn"]. 
                    " Judul: " . $row["judul"].
                    " Penulis: " . $row["penulis"].
                    " Tahun terbit: " . $row["tahun_terbit"].
                    " Penerbit: " . $row["penerbit"].
                    "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    
?>

