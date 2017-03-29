<?php
include 'databaseConnection.php';
/* 
 *  File php untuk proses pencarian buku sesuai query.
 *  Sudah digantikan oleh listBuku
 */
    $sql = "SELECT * FROM buku";    // Query untuk mencari buku
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

