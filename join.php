<?php
session_start();
if(!isset($_SESSION["logged-in"])){
  header("Location: index.php");
}
include("function.php");
$Conn = new connection();

?>
<!DOCTYPE html>
<html lang="hu">
  <head>
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"  crossorigin="anonymous"/>
    <link rel="stylesheet" href="home.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>
    <title>Csoportok</title>
  </head>
  <body>
    <?php
      echo Navbar();
      
?>
//Fejlesztés alatt
<div class="content">
  <div class="field">
  <div class="main">
  <h3>Hozz létre saját csoportot</h3>
  <form action="">
    <h5>Csoport neve:</h5>
    <input type="text" name="group" id="">
  </form>
  </div>
<div class="sidebar">
  <p>Csoportok</p>
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
                    <div class="col item social"><a href="https://www.facebook.com/miracledeer"><i class="icon fa fa-facebook" ></i></a><a href="https://twitter.com/home"><i class="icon fa fa-twitter"></i></a><a href="https://www.instagram.com"><i class="icon fa fa-instagram"></i></a><a href="https://github.com/Zsolti145"><i class="icon fa fa-github"></i></a></div>
                </div>
                <p class="copyright">HungaroDev© 2021</p>
            </div>
        </footer>
    </div>
  </div>

  </body>
</html>