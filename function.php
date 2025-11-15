<?php
include("inc/connection.inc.php");

function Navbar() {
    $output  = '';
    $output .= '<header>';
    $output .= '<nav class="navbar navbar-expand-lg navbar-light bg-light" id="header">';
    $output .= '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collbtn" aria-controls="collbtn" aria-expanded="false" aria-label="Toggle navigation">';
    $output .= '<span class="navbar-toggler-icon"></span>';
    $output .= '</button>';

    $output .= '<div class="collapse navbar-collapse" id="collbtn">';
    $output .= '<ul class="navbar-nav me-auto">'; // Bootstrap 5: "mr-auto" → "me-auto"

    $output .= '<li class="nav-item"><a class="nav-link" href="home.php">Főoldal</a></li>';
    $output .= '<li class="nav-item"><a class="nav-link" href="join.php">Csatlakozz</a></li>';
    $output .= '<li class="nav-item"><a class="nav-link" href="support.php">Támogatás</a></li>';
    $output .= '<li class="nav-item"><a class="nav-link" href="inc/logout.inc.php">Kilépés</a></li>';
    $output .= '<li class="nav-item"><a class="nav-link" href="user.php"><img id="profpic" src="logo.png" alt="Profil"></a></li>';

    $output .= '</ul>';
    $output .= '</div>';
    $output .= '</nav>';
    $output .= '</header>';

    echo $output;
}

?>