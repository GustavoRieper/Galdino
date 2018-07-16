<!DOCTYPE html>
<html>
    <head>
        <title>Painel Administrativo - Galdino</title>
        <link rel="stylesheet" type="text/css" href="../css/adm_site/index.css">
        <link rel="stylesheet" type="text/css" href="../css/adm_site/menu.css">
        <script>
            function limite_textarea(valor) {
                quant = 300;
                total = valor.length;
                if(total <= quant) {
                    resto = quant - total;
                    document.getElementById('cont').innerHTML = resto;
                } else {
                    document.getElementById('texto').value = valor.substr(0,quant);
                }
            }        
        </script>
        <?php
            $pagina = "Visualizar Site";      
        ?>
    </head>
    
    <body>
        <?php include'menu.php';?>
        <div class="content">
            <div class="cadastro">
                <h1>Postagem de Projetos</h1>

                <form action="" method="post">
                    <input type="text" name="nome" required autocomplete="off" placeholder="Nome do Projeto" id="nome">
                    <br>
                    <p>Descrição do Projeto<br>
                        <span id="cont">300 </span> <span id="restante">Restantes</span> <br>
                    </p>
                    <textarea required placeholder="Descrição" maxlength="300" cols="70" rows="10" id="texto" onkeyup="limite_textarea(this.value)"></textarea>
                    <br>
                    <br>
                    <hr>
                    <p id="p_data">Data</p>
                    <input type="date" required id="data" placeholder="Data">
                    <br>                
                    <input type="submit" value="Cadastrar" id="cadastro">

                </form>
            </div>
        </div>
</html>