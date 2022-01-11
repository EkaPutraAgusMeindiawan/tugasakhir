<?php
if(isset($_POST["submit"])){
  if($_POST["username"]== "eka" && $_POST["password"]=="123") {
    header("Location: home.html");
    exit;
  }else{
    header("Location: logiin.php");
  }
}
?>

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
                <a class="nav-link" href="tamu.php">Buku tamu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="logiin.html">login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<!--about-->  
     <div class="data">
       <form action="" method="post">
         <div>
           <label for="usename">username</label>
           <input type="text" name="username" id="username">
         </div>
         <div>
          <label for="password">password</label>
          <input type="password" name="password" id="password">
        </div>
        <div>
          <input type="submit" name="submit" class="tombol">
        </div>
       </form>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <br>
    <footer align="center">
        <div class="footer-bottom">
          <a>copyright &copy2021 by Eka Putra</a>
        </div>
    </footer>
  </body>
</html>