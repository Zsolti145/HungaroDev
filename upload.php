<?php

function uploadImage(){
if (isset($_POST['upload'])) {
  $fileName = $_FILES['image']['name'];
  $fileTmp = $_FILES['image']['tmp_name'];
  $fileSize = $_FILES['image']['size'];
  $fileError = $_FILES['image']['error'];
 

  $fileExt = explode(".", $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png');
  $uniquename= "dev_" . bin2hex(random_bytes(8)).'.'. $fileActualExt;


  if (in_array($fileActualExt, $allowed)) {

      // Ellenőrzés: nincs-e hiba a feltöltéskor
      if ($fileError === 0) {

        // Ellenőrzés: méret ne legyen 5 MB-nál több
        if ($fileSize < 10000000) {

          // MIME típus ellenőrzés (valóban kép-e)
          $check = getimagesize($fileTmp);
          if ($check !== false) {

            // Egyedi fájlnév létrehozása (pl. ceg_123abc.jpg)
            $fileNameNew = urlencode($uniquename);

            // Célmappa, ahová a képet tesszük
            $fileDest = 'images/' . $fileNameNew;

            // Fájl mozgatása az ideiglenes helyről a véglegesbe
            if (move_uploaded_file($fileTmp, $fileDest)) {
              header("Location: user.php?status=success&file=".$fileNameNew);
              exit();
              
            } else {
             header("Location: user.php?status=error&msg=move_failed");
            }
          } else {
            header("Location: user.php?status=error&msg=not_image");
          }

        } else {
         header("Location: user.php?status=error&msg=filesize");
        }

      } else {
       header("Location: user.php?status=error&msg=fileerror");
      }

    } else {
      header("Location: user.php?status=error&msg=extension");
    }
  }
}

?>