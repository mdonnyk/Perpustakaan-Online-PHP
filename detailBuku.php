<!DOCTYPE html>
<!--
Halaman untuk menampilkan detail buku
Tampilan buku + kode buku dan detail
-->
<?php include 'databaseConnection.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <!-- Bagian awal detail buku tabel awal -->
        
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
        </table>
        
        <!-- Bagian awal detail buku tabel awal -->
        
        
        <table>
        
        <?php
        /*
         * Sniplet php untuk mencari detail buku fisik
         */
        
        $isbn = $_POST['isbn'];
        $sql = "SELECT kode, status FROM BUKU WHERE isbn=$isbn;";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
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
