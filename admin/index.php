<!DOCTYPE html>
<html>
    <head>
        <title>Construtora Galdino - Login administrativo</title>
        <link rel="stylesheet" type="text/css" href="../css/admin/index.css">
    </head>
    
    <body>
        <div class="content">
            <div class="box_login">
                <a href="../">
                    <img src="../img/logo.png" title="Voltar ao Site">
                </a>
                <br>
                <form action="autenticacao.php" method="post">                    
                    <input type="email" name="email" id="email" placeholder="E-mail" required autofocus>
                    <br>
                    <input type="password" name="senha" id="senha" placeholder="Senha" required>
                    <br>
                    <input type="submit" value="Enviar" id="enviar">
                </form>
                <?php
                    session_start();
                    $_SESSION['pagina'] = '1'; 
                    if(isset($_SESSION['login'])){
                        echo("
                            <div id='incorrect'>
                                <p>Senha Incorreta</p>                        
                            </div>                        
                        ");
                    }else{
                    }
                ?>
            </div>
            <br>            
        </div>
    </body>

</html>