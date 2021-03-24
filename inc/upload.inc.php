<?php
include("connection.inc.php");
$Conn = new connection();
//Kép feltöltés fejlesztés alatt
if(isset($_POST['upload'])){
    $fileName = $_FILES['image']['name'];
    $fileTmp = $_FILES['image']['tmp_name'];
    $fileSize = $_FILES['image']['size'];
    $fileError = $_FILES['image']['error'];
    $fileType = $_FILES['image']['type'];
    
    $fileExt = explode(".",$fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png');

if(in_array($fileActualExt,$allowed)){
 if($fileError === 0){
   if($fileSize < 1000000){
    $fileNameNew = uniqid('',true).".".$fileActualExt;
    $fileDest = 'images/'.$fileNameNew;
     move_uploaded_file($fileTmp, $fileDest);
       header("Location: ../user.php?Sikeres");
    } else {
    echo "Túl nagy a fálj mérete";                   
       }
   } else {
    echo "Hiba történt a fájl feltöltésekor";            
}
   }else { 
 echo "Nem tölthetsz fel ilyen kiterjesztésü fájlt";
}

}

?>