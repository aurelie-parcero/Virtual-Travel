<?php

$visible = false;

if(isset($_GET['page'])){

    switch ($_GET['page']) {
        case 'home':
            include 'home.php';
            break;
        case 'catalogue':
            include 'catalogue.php';
            break;
        case 'equipe':
            include 'equipe.php';
            break;
        case 'contact':
            include 'contact.php';
            break;
        case'connexion':
            include 'connexion.php';
            break;
        case'muzaffer':
            include 'muzaffer.php';
            break;
        case'matthias':
            include 'matthias.php';
            break;
        case 'hyejin':
            include 'hyejin.php';
            break;
        case 'aurelie':
            include 'aurelie.php';
            break;
        default:
            include 'home.php';
    }
}
else {
    include 'home.php';
}