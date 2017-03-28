<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'databaseConnection.php'; // Membuat koneksi ke database perpus_online localhost
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Hasil cari buku:
        <table>
            <tr>
                <td>
                    ISBN
                </td>
                <td>
                    Judul
                </td>
                <td>
                    Nama Pengarang
                </td>
                <td>
                    Tahun Terbit
                </td>
                <td>
                    Penerbit
                </td>
            </tr>
        
        
        <?php
        
        $qcari = $_GET['query'];
        $sql = "SELECT * FROM BUKU WHERE "
                . "(ISBN LIKE '%$qcari%' "
                . "OR JUDUL LIKE '%$qcari%' "
                . "OR PENULIS LIKE '%$qcari%');";

                
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) { 
        ?>
            
            <tr>
                <td>
                    <?php echo $row["isbn"]; ?>
                </td>
                <td>
                    <?php echo $row["judul"]; ?>
                </td>
                <td>
                    <?php echo $row["penulis"]; ?>
                </td>
                <td>
                    <?php echo $row["tahun"]; ?>
                </td>
                <td>
                    <?php echo $row["penerbit"]; ?>
                </td>
            </tr>    
             
        <?php    
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
            
        </table>
    </body>
</html>
