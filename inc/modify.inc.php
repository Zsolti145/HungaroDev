<?php
include("connection.inc.php");

$Conn = new connection();

$email = $_POST['email'];
$oldpwd = $_POST['oldpwd'];
$newpassw1 = $_POST['newpwd'];
$newpassw2 = $_POST['newpwd2'];


$message = "A két új jelszó nem egyezik meg!";

if($Conn->login($email, password_verify($oldpwd,$hashedPwd)) === false )
	die ( '<script> alert("Rosszul írtad be a felhasználó nevet vagy a régi jelszót!")</script>');
else{
            if( strcmp($newpassw1, $newpassw2) != 0 )
            die ("<script>alert('$message');</script>");
                else{
               if($Conn->modify($email, $newpassw1) === false )
                echo '<script> alert("Valamilyen hiba lépett közbe, kérlek próbáld később újra!")</script>';
              else
                echo '<script> alert("Sikeresen megváltozattad a jelszavad!")</script>';			
                       }
                    }
?>