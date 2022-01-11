<!DOCTYPE html>
<html>
    <head>
        <title>a11.2021.13269</title>
    </head>
    <body>
        <h1>Data Tamu</h1>
        <div>
            <?php
            if(isset($_POST['nama'])){
                $nama = $_POST['nama'];
                $nomor = $_POST['nomor'];
                $email = $_POST['email'];
                $alamat = $_POST['alamat'];
                $pesan = $_POST['pesan'];

                echo "nama: $nama,<br> nomor:$nomor,<br> email:$email,<br> alamat:$alamat,<br> pesan:$pesan";

            }
            ?>
        </div>
    </body>
</html>