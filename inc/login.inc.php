<?php
session_start();
include("connection.inc.php");

$Conn = new connection();
if(isset($_POST['user']) && isset($_POST['pwd'])){
      $user = $_POST['user'];
      $pwd = $_POST['pwd'];
      $Conn->login($user,$pwd); 
}else{
    header("Location: ../index.php");
}

?>