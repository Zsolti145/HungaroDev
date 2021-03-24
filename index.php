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
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HungaroDev</title>
</head>
<body>
    <div class="site">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Bejelentkezés</button>
                <button type="button" class="toggle-btn" onclick="register()">Regisztráció</button>          
            </div>

           <form action="inc/login.inc.php" method="POST" id="login"  class="input-group" style="left: 50px;" >
               <input type="text" class="input-field" name="user" placeholder="Felhasználónév" required>
               <input type="password" class="input-field" name="pwd" autocomplete="new-password" placeholder="Jelszó" required>
               <input type="checkbox" class="check-box" autocomplete="new-password" ><span>Emlékezz a jelszóra</span>
               <a href="modify.php"><span>Elfelejtetted a jelszavad?</span></a>
               <button type="submit" name="submit" class="submit-btn">Belépés</button>
           </form>

           <form action="inc/signup.inc.php" method="POST" id="register" class="input-group"style="left: 450px;">
            <input type="email" class="input-field" name="email" placeholder="E-mail cím" required>
            <input type="text" class="input-field" name="user" placeholder="Felhasználónév" required>
            <input type="password" class="input-field" name="pwd" placeholder="Jelszó" required>
             <input type="checkbox" class="check-box" required><span>Elfogadom az általános felhasználói feltételeket</span>
             <button type="submit" class="submit-btn">Regisztráció</button>
           </form> 
            
        </div>
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }

        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "150px";
        }
          
    </script>
    
</body>
</html>