<?php session_start();
if (isset($_SESSION["logged-in"])) {
    if ($_SESSION["logged-in"] == true) {
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>HungaroDev</title>
</head>

<body>
    <div class="site">

        <section class="form-box ">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Bejelentkezés</button>
                <button type="button" class="toggle-btn" onclick="register()">Regisztráció</button>
            </div>
            <div class="input-items" id="login">
                <form action="inc/login.inc.php" method="POST" ">
                    <div class=" mb-3 ">
                        <input type=" text" class="input-field " name="user" placeholder="Felhasználónév" required>
            </div>
            <div class="mb-3 ">
                <input type="password" class="input-field " name="pwd" autocomplete="new-password" placeholder="Jelszó" required>
            </div>
            <div class="mb-3 col-6">
                <input type="checkbox" class="check-box" autocomplete="new-password"><span>Emlékezz a jelszóra</span>

            </div>
            <div class="mb-3 ">
                <a href="modify.php"><span>Elfelejtetted a jelszavad?</span></a>

            </div>
            <div class="mb-3 ">
                <button type="submit" name="submit" class="submit-btn ">Belépés</button>
            </div>
            </form>
    </div>
    <div class="input-items" id="register">
        <form action="inc/signup.inc.php" method="POST" ">
                <div class=" mb-3">
            <input type="email" class="input-field" name="email" placeholder="E-mail cím" required>
    </div>
    <div class="mb-3">
        <input type="text" class="input-field" name="user" placeholder="Felhasználónév" required>
    </div>
    <div class="mb-3">
        <input type="password" class="input-field" name="pwd" placeholder="Jelszó" required>
    </div>
    <div class="mb-3">
        <input type="checkbox" class="check-box" required><span>Elfogadom az általános felhasználói feltételeket</span>
    </div>
    <div class="mb-3">
        <button type="submit" class="submit-btn">Regisztráció</button>
    </div>





    </form>
    </div>

    </section>
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function login() {
            x.style.left = "0px";
            y.style.left = "450px";
            z.style.left = "0";
        }

        function register() {
            x.style.left = "-400px";
            y.style.left = "0px";
            z.style.left = "170px";
        }
    </script>

</body>

</html>