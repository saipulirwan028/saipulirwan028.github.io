<?php
    session_start();
    $username=$_POST["username"];
    $password=$_POST["password"];

    if($username=="admin" AND $password=="admin"){
        #code
        $_SESSION["username"]=$username;
        header("location:Profil1.html");
    }else{
        header("location:index.html?login_error");
    }
?>
