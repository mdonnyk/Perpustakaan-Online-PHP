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
        Detail Buku:
        <table>
            <tr>
                <td>ISBN</td>
                <td><?php echo $_POST['isbn']; ?></td>
            </tr>
            <tr>
                <td>Judul</td>
                <td><?php echo $_POST['judul']; ?></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td><?php echo $_POST['penulis']; ?></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td><?php echo $_POST['tahun']; ?></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><?php echo $_POST['penerbit']; ?></td>
            </tr>
        
        
        <?php
        
        $isbn = $_POST['isbn'];
        $sql = "SELECT kode, status FROM BUKU WHERE isbn=$isbn;";

                
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) { 
        ?>
            
            <tr>
                <td>
                    <?php echo $row["kode"]; ?>
                </td>
                <td>
                    <?php echo $row["status"]; ?>
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
