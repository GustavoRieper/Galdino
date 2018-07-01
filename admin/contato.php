<?php
    date_default_timezone_set('Brazil/East');
    header ('Content-type: text/html; charset=UTF-8');

    include("conection.php");
    
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $fone = $_POST["fone"];
    $msg = $_POST["msg"];
    $date = date('d/m/Y');

    $sql = "INSERT INTO contato VALUES ('$nome', '$email', '$fone', '$msg','$date')";
    $insert = mysqli_query($conection,$sql);

    $exibir = "
        Nome: $nome
    	Email: $email
    	Telefone: $fone
    	Mensagem: $msg
    	Data: $date
    ";

    echo("<script>alert('Mensagem enviado com sucesso!');</script>");
    echo "<script> window.location='../contato.php';</script>"; 

	ini_set('display_errors', 1);
	 
	error_reporting(E_ALL);
	 
	$from = "gustavorieper@gmail.com";
	 
	$to = "gustavorieper@gmail.com";
	 
	$subject = "Contato do Site Galdino";
	 
	$message = $exibir;
	 
    $headers = "Content-Type: text/plain; charset=utf-8\r\n";
	 
	mail($to, $subject, $message, $headers);
?>
