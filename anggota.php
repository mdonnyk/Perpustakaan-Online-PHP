<!DOCTYPE html>
<!--
Halaman untuk anggota 
berisi:     - daftar peminjaman
            - 
-->
<?php include 'databaseConnection.php'; // Membuat koneksi ke database perpus_online localhost ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Daftar Peminjaman
        <table>
            <tr>
                <td>
                    kode buku
                </td>
                <td>
                    tanggal pinjam
                </td>
                <td>
                    status
                </td>
            </tr>
        
        
        <?php
        /*
         * Sniplet untuk mencari buku berdasarkan query yang dilampirkan oleh halaman utama
         */
        //$qcari = $_GET['query'];
        $sql = "SELECT kode, tanggal_pinjam, tanggal_kembali FROM PEMINJAMAN WHERE no_anggota='111111';";

                
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
                    <?php echo $row["tanggal_pinjam"]; ?>
                </td>
                <td>
                    <?php if($row["tanggal_kembali"]==null) echo "belum dikembalikan"; ?>
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
