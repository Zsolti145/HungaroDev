<?php

class connection{

    function Connect(){
    $Conn = new mysqli("localhost","root","","loginform");
    return $Conn;
    if($Conn->connect_error)
   die("Nem sikerült csatlakozni az adatbázishoz!");
    }

   function login($user,$pwd){
     $Conn = $this->Connect();

        $sql = "SELECT id ,FelhasznaloNev, Jelszo FROM users WHERE FelhasznaloNev='$user'";
        $result = $Conn->query($sql);
        while($row = $result->fetch_assoc()){
            $hashedPwd = $row['Jelszo'];
            $_SESSION["user"] = $row['FelhasznaloNev'];
        }
        if(password_verify($pwd, $hashedPwd)){
            $_SESSION["logged-in"] = true;
            header("Location: ../home.php");
        }     
         else{
            header("Location: ../index.php");
            
        }
    }

    function signup($email,$user,$pwd){
        $Conn = $this->Connect();
        $userExist = "SELECT FelhasznaloNev FROM users WHERE FelhasznaloNev='$user'";
        $result = $Conn->query($userExist);
        $message = "Ez a felhsználó már létezik";

        if(mysqli_num_rows($result) > 0){
            die ("<script>alert('$message');</script>");
            header("Location: ../index.php");
        }
        else{
            $hash = password_hash($pwd,PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (Email, FelhasznaloNev, Jelszo)  VALUES('$email','$user','$hash')";
            $Conn->query($sql);

            header("Location: ../index.php");
        }
         return $sql;
        }

        function modify($email,$newpassw1){
        $Conn = $this->Connect();
        
        $hash = password_hash($newpassw1,PASSWORD_DEFAULT);
        $sql = "UPDATE users SET Jelszo ='$hash' WHERE Email LIKE '$email';";
        $Conn->query($sql);
       header("Location: ../index.php");
    
        return $sql;
    }
function upload(){}
}


?>