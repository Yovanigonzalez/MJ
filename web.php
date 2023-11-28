<?php


session_start();

include 'includes/cabecera.php' ;
?>

<?php

if(isset($_SESSION['rol'])){
        if ($_SESSION['rol'] == 1) {
            include('includes/menuAdmin.php');
        }else{
        include('includes/nav-menu.php');
    }
    }else{
        include('includes/nav-menu.php');
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>web</h1>
</body>
</html>