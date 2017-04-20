<?php
/* File php untuk proses peminjamanan / memasukan peminjaman ke record
 * 
 */

include 'databaseConnection.php';

$no = $_POST["no"];
$kode = $_POST["kode"];
$tanggal_pinjam = date("Y-m-d");
$masa_pinjam = 7;

$sql = "INSERT INTO `peminjaman` (`no_anggota`, `kode`, `masa_pinjam`, `tanggal_pinjam`) "
        . "VALUES ('$no', '$kode', '$masa_pinjam', '$tanggal_pinjam');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully = tanggal pinjam $tanggal_pinjam";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 