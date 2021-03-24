<?php
include("inc/connection.inc.php");

function Navbar(){
        $output = "";
        $output .= '<header>';
 $output .= '<nav class="navbar navbar-expand-lg" id="header">';
          $output .= '<button class="navbar-toggler navbar-light bg-light"type="button" data-toggle="collapse" data-target="#collbtn" aria-controls="collbtn"aria-expanded="false"aria-label="Toggle navigation">';
          $output .= '<span class="navbar-toggler-icon"></span>';
           $output .= '</button>';
            $output .= '<div class="collapse navbar-collapse" id="collbtn">';
            $output .= '<ul class="navbar-nav mr-auto">';

                 $output .= '<li class="nav-item" ><a class="';
                 $output .= 'nav-link" href="home.php">Főoldal</a></li>';

                 $output .= '<li class="nav-item" ><a class="';
                 $output .= 'nav-link" href="join.php">Csatlakozz</a></li>';
                 
                 $output .= '<li class="nav-item" ><a class="';
                 $output .= 'nav-link" href="support.php">Támogatás</a></li>';

                 $output .= '<li class="nav-item" >';
                 $output .= '<a class="nav-link" href="inc/logout.inc.php">Kilépés</a></li>';

                 
                 
                 $output .= "</ul>";
                 $output .= '<li class="nav-item" >';
                 $output .= '<a class="nav-link" href="user.php"><img id="profpic"src="logo.png"></a></li>';
                 $output .= '</div>';
                 $output .= "</nav>";	
                 
                 $output .= '</header>';   
 
 echo $output;      
    }



?>