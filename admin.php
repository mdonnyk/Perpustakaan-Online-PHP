<!DOCTYPE html>
<!--
Halaman Admin Utama
fungsi : 1. Menambahkan Buku 

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Masukan Buku:
        <form action="inputBuku.php" method="POST">
            Kode : <input type="text" name="kode" value="" /><br>
            ISBN :<input type="text" name="isbn" value="" /><br>
            Judul :<input type="text" name="judul" value="" /><br>
            Penulis :<input type="text" name="penulis" value="" /><br>
            Tahun :<input type="text" name="tahun" value="" /><br>
            Penerbit : <input type="text" name="penerbit" value="" /><br>
            <input type="submit" value="ok" />
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
