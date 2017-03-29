<?php
/* File php untuk proses memasukan buku ke database
 * 
 */

include 'databaseConnection.php';
$kode = $_POST["kode"];
$isbn = $_POST["isbn"];
$judul = $_POST["judul"]; 
$penulis = $_POST["penulis"];
$tahun = $_POST["tahun"];
$penerbit = $_POST["penerbit"];

$sql = "INSERT INTO `buku` (`kode`, `isbn`, `judul`, `penulis`, `tahun`, `penerbit`, `status`) "
        . "VALUES ('$kode', '$isbn', '$judul', '$penulis', '$tahun', '$penerbit', '1');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully = judul $judul";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 