<?php
session_start();
if (!isset($_SESSION["logged-in"])) {
  header("Location: home.php");
}
include("function.php");
$Conn = new connection();

?>
<!DOCTYPE html>
<html lang="hu">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="stlye.css">
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <title>Főoldal</title>
</head>


<body class="home">
  
  <?php
  echo Navbar();
  
  
  ?>
  

  <div class="content">
    <h2><?php if (isset($_SESSION['user'])) {
          echo "Üdv újra, <a href='user.php'>{$_SESSION['user']}</a>! ";
        } ?></h2>
    <div class="field">
      <div class="card-group">
        <div class="card">
          <img src="gamedevelop.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">A koncepció</h5>
            <p class="card-text">Ez az oldal azzal a céllal jött létre hogy egyesítse a magyar játékfejlesztőket</p>
            <p class="card-text"><small class="text-muted"></small></p>
          </div>
        </div>
        <div class="card">
          <img src="groups.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Csoportok</h5>
            <p class="card-text">Alkoss csoportot más fejlseztőkkel,és dobjátok össze ötleteiteket.</p>
            <p class="card-text"><small class="text-muted"></small></p>
            <a href="join.php" class="btn btn-primary">Csoport Létrehozás</a>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-dark">
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-3 item">
              <h3>Kapcsolat</h3>
              <ul>
                <li><a href="mailto:zsoltika192@gmail.com">E-mail</a></li>
                <li><a href="https://twitter.com/home">Twitter</a></li>
                <li><a href="https://www.facebook.com/miracledeer">Facebook</a></li>
              </ul>
            </div>
            <div class="col-md-6 col-md-4 item text">
              <h3>HungaroDev</h3>
              <p>Célunk hogy a "világban elveszett" magyar játékfejlesztőket egy közösségbe tudjuk tartani</p>
            </div>
            <div class="col-sm-6 col-md-3 item"></div>
            <div class="col item social"><a href="https://www.facebook.com/miracledeer"><i class="icon fa fa-facebook"></i></a><a href="https://twitter.com/home"><i class="icon fa fa-twitter"></i></a><a href="https://www.instagram.com"><i class="icon fa fa-instagram"></i></a><a href="https://github.com/Zsolti145"><i class="icon fa fa-github"></i></a></div>
          </div>
          <p class="copyright">HungaroDev© 2021</p>
        </div>
      </footer>
    </div>
  </div>
  </body>

</html>