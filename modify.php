<?php session_start();
    if(isset($_SESSION["logged-in"])){
        if($_SESSION["logged-in"] == true){
            header("Location: home.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <link rel="stylesheet" href="newpassw.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HungaroDev/Jelszó modosítás</title>
</head>
<body>
    <div class="site">
        <div class="form-box">
        <div class="button-box">
                <div id="btn"></div>
                <button class="toggle-btn" >Elfelejtett jelszó</button>
               <a href="index.php"><button class="toggle-btn" >Vissza</button></a>
                </div>

           <form action="inc/modify.inc.php" method="POST"  class="input-group" style="left: 50px;" >
               <input type="text" class="input-field" name="email" placeholder="E-mail cím" required>
               <input type="password" class="input-field" name="oldpwd" placeholder="Régi jelszó" required>
               <input type="password" class="input-field" name="newpwd" autocomplete="new-password" placeholder=" Új jelszó" required>
               <input type="password" class="input-field" name="newpwd2" autocomplete="new-password" placeholder="Jelszó újra" required>
               <button type="submit" name="submit" class="submit-btn">Jelszó megváltoztatása</button>
           </form>
         </div>
    </div>
    
</body>
</html>