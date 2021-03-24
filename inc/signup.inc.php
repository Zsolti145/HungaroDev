<?php
include("connection.inc.php");

$Conn = new connection();
if(isset($_POST['email']) && isset($_POST['user']) && isset($_POST['pwd'])){
    $email = $_POST['email'];
    $user = $_POST['user'];
    $pwd = $_POST['pwd'];    
    $Conn->signup($email,$user,$pwd);  
}
else{
    header("Location: ../index.php");
}

?>