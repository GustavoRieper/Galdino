<?php
include 'conexao.php';

    $email  = $_POST['email'];
    $senha  = $_POST['senha'];

    $sql        = mysqli_query($conexao, "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'") or die (mysql_error);
    //$sql    = mysqli_query($conexao, "SELECT * FROM usuario WHERE email='$email' AND senha'$senha'") or die (mysql_error());
    $row    = mysqli_num_rows($sql);
    if($row > 0){
        session_start();
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['senha'] = $_POST['senha'];

        echo("<script> window.location='../adm_site/index.php';</script>");
    }
    else{
        session_start();
        $_SESSION['login'] = '1';
        echo("<script> window.location='index.php';</script>");
    }
?>