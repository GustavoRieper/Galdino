<!DOCTYPE html>
<html>
    <head>
        <title>Construtora Galdino | Contato</title>
        <link rel="stylesheet" type="text/css" href="css/contato.css">
        <script>
                $(document).ready(function(){
            $('#form').submit(function(){

                var dados = $(this).serialize(); 
                // dados = "nome=" + nome.value + "&email=" + email.value;

                $.ajax({
                    type: "POST",
                    url: "admin/contato.php",
                    data: dados,
                    success: function(RESPOSTA_PHP)
                    {
                        RESULTADO.innerHTML = RESPOSTA_PHP;
                    }
                });

                return false; // Usado para não dar um refresh.
            });


        });

        </script>
    </head>
    
    <body>
        <?php include 'menu.php'; ?>        
        <div id="t3">
            <div id="txt_t3">
                <p>ENTRE EM CONTATO</p>
            </div>
                <div id="Divformulario">
                    <form method="post" action="admin/contato.php" id="form">
                        <input type="text" name="nome" id="nome" placeholder="Nome" size="40px" required autocomplete="off" autofocus><br>
                        <input type = "email" name="email"   id="email" placeholder="Email" size="40px"  required autocomplete="off"><br>
                        <input type="number" name="fone" id="fone" placeholder="Telefone" size="40px" maxlength="15" autocomplete="off"><br>
                        <textarea name="msg" id="msg" placeholder="Mensagem" rows="10" cols="39" wrap="virtual" maxlength="600" required autocomplete="off"></textarea><br>
                        <div id="RESULTADO"></div>
                        <input type="submit" id="btn_enviar" value="ENVIAR"><br>
                    </form>
                </div>
            <br>
        </div>
    </body>
</html>