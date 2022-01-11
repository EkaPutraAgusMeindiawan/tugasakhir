<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>A11.2021.13269</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">ONE CELL</a>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="home.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="produk.html">Produk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="tamu.php">Buku tamu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logiin.php">login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<!--about-->
      <div class="data">
        <form action="data.php" method="POST" onsubmit="alert('Apakah data anda sudah benar?')">
          <div>
            <label>Nama Lengkap</label>
            <input type="text" name="nama" id="nama">
          </div>
          <div>
            <label>Nomor</label><br>
            <input type="number" name="nomor" id="nomor">
          </div>
          <div>
            <label>Email</label><br>
            <input type="Email" name="email" id="email">
          </div>
          <div>
            <label>Alamat</label>
            <textarea rows="2" type="text" name="alamat" id="alamat"></textarea>
          </div>
          <div>
            <label>Pesan</label>
            <textarea rows="2" type="text" name="pesan" id="pesan"></textarea>
          </div>
          <div>
            <input type="submit" class="tombol">
          </div>
        </form>
      </div>
           
            <h3 align="center" id="tanggal"></h3>
            <div class="jam_digital">
                <div class="kotak">
                <p id="jam"></p>
                </div>
                <div class="kotak">
                <p id="menit"></p>
                </div>
                <div class="kotak">
                <p id="detik"></p>
                </div>
            </div>

        <script type="text/javascript">
            
            var tgl = new Date();
            document.getElementById("tanggal").innerHTML = "waktu akses "+tgl;

            window.setTimeout("waktu()",1000);
            function waktu(){
                var waktu = new Date();
                setTimeout("waktu()",1000);
                document.getElementById("jam").innerHTML = waktu.getHours();
                document.getElementById("menit").innerHTML = waktu.getMinutes();
                document.getElementById("detik").innerHTML = waktu.getSeconds();

            }
            //megubah warna css per detik
            var i=0
            function change(){
                var classJamDigital = document.getElementsByClassName
                ("jam_digital");
                var color = ["salmon","lightblue","blue","seashell"];
                classJamDigital[0].style.backgroundColor = color[i];
                i=(i+1)%color.length
            }
            setInterval(change, 1000);

        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <br>
    <footer align="center">
        <div class="footer-bottom">
          <a>copyright &copy2021 by Eka Putra</a>
        </div>
    </footer>
  </body>
</html>