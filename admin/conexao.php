<?php
$host   ="localhost";
$user   ="root";
$pass   ="";
$db     ="galdino";
$conexao = mysqli_connect($host, $user) or die (mysqli_error());
mysqli_select_db($conexao, $db) or die (mysqli_error());
?>