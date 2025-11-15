<?php
session_start();
require("function.php");
include("upload.php");
if($_SERVER["REQUEST_METHOD"] === "POST"){
  uploadImage();}
  
  if (!isset($_SESSION["logged-in"])) {
    header("Location: index.php");
    exit();
    include("connection.php");
}
?>
<!DOCTYPE html>
<html lang="hu">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <title>FelhasználóiFiók</title>
</head>

<body>
  
    <?php
    echo Navbar();
?>
  
  <section class=" dashboard d-flex justify-content-center align-items-center flex-column">
    <h2>Felhasználói fiók</h2>
    <div>


      <div class="button-box mb-5">
        <h3>Felhasználói adatok</h3>
        <form action="modify.php" id="userinfo">

          <table>
            <tbody>
              <tr>
                <td>Név:</td>
                <td><?php if (isset($_SESSION['user']))
                      echo $_SESSION['user']; ?></td>
              </tr>
              <tr>
                <td>E-mail:</td>
                <td> <?= htmlspecialchars($_SESSION["email"] ?? ""); ?>
                </td>

              </tr>
              <tr>
                <td>Jelszó: </td>
                <td><input type="password" name="pwd" class="form-control"></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </form><br>
      </div>

      <div class="button-box">
        <h3>Kép feltöltés</h3>
        <form action="user.php" method="POST" enctype="multipart/form-data">
           <label for="formFile" class="form-label">Default file input example</label>
  <input class="form-control" type="file" id="formFile" accept="image/png, image/jpeg" name="image" required">
          <input type="submit" name="upload" value="Feltölt" class="submit-btn">

        </form>
      </div>
    </div>
  </section>
</body>

</html>