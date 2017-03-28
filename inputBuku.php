<?php
include 'databaseConnection.php';

$kode = $_POST["kode"];
$isbn = $_POST["isbn"];
$judul = $_POST["judul"]; 
$penulis = $_POST["penulis"];
$tahun = $_POST["tahun"];
$penerbit = $_POST["penerbit"];

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$sql = "INSERT INTO `buku` (`kode`, `isbn`, `judul`, `penulis`, `tahun`, `penerbit`, `status`) "
        . "VALUES ('$kode', '$isbn', '$judul', '$penulis', '$tahun', '$penerbit', '1');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully = judul $judul";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 

