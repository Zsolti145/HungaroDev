<?php
session_start();
if (!isset($_SESSION["logged-in"])) {
  header("Location: index.php");

  include("connection.php");
}
?>
<!DOCTYPE html>
<html lang="hu">

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <title>FelhasználóiFiók</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg" id="header">
      <button class="navbar-toggler navbar-light bg-light" type="button" data-toggle="collapse" data-target="#collbtn" aria-controls="collbtn" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collbtn">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a class="nav-link" href="home.php">Főoldal</a></li>
          <li class="nav-item"><a class="nav-link" href="join.php">Csatlakozz</a></li>
          <li class="nav-item"><a class="nav-link" href="support.php">Támogatás</a></li>
          <li class="nav-item"><a class="nav-link" href="inc/logout.inc.php">Kilépés</a></li>
        </ul>
      </div>
    </nav>
  </header>


  <h3>Felhasználói adatok</h3>
  <div class="button-box">
    <form action="modify.php" id="userinfo">
      <table>
        <table>
          <tbody>
            <tr>
              <td>Név:</td>
              <td><?php if (isset($_SESSION['user']));
                  echo $_SESSION['user']; ?></td>
            </tr>
            <tr>
              <td>E-mail:</td>
              <td><?php echo $_GET['email']; ?></td>

            </tr>
            <tr>
              <td>Jelszó: </td>
              <td><input type="password" name="pwd"></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
    </form><br>
  </div>

  <h3>Kép feltöltés</h3>
  <div class="button-box">
    <form action="upload.php" method="POST" enctype="multipart/form-data">
      <label class="">
        <input type="file" name="image" />
      </label>
      <input type="submit" name="upload" value="Feltölt" class="submit-btn">

    </form>
  </div>
</body>

</html>