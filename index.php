<?php
session_start();
if(isset($_POST['conectare'])){
    $name=$_POST['user'];
    $password=$_POST['parola'];
    require_once 'functii/sql_functions.php';
    $angajat=  login($name, $password);
    if($angajat){
        $_SESSION['user']=$angajat['username'];
        if(isset($_SESSION['eroare_login'])){
            unset($_SESSION['eroare_login']);
        }
    } else {
        $_SESSION['eroare_login']="Conectare esuata";
    }
}
if(isset($_GET['logout'])){
    session_destroy();
    header("location:index.php");
}

if(isset($_GET['id'])){
    $a=$_GET['id'];
    $_SESSION['receiver']=$a;
    
}


?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.6-dist/css/bootstrap.min.css">
      
        <?php 
        if(isset($_SESSION['user'])){
            print '<link rel="stylesheet" type="text/css" href="css/p2.css">'
            . '<link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.6-dist//css/bootstrap.min.css">';
        } else {
            print '<link rel="stylesheet" type="text/css" href="css/p1.css">'
            . '<link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.6-dist//css/bootstrap.min.css">';
        }
        
        
        
        ?>
           <link rel="stylesheet" type="text/css" href="css/main.css">
       
    </head>
    <body>
        <?php
        if(isset($_SESSION['user'])){
            require_once 'layout/p2.php';
        } else {
            require_once 'layout/p1.php';
        }
        ?>
    </body>
</html>
