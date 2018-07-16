<!DOCTYPE html>
<html>
    <head>
        <title>Vizualizar Site - Galdino</title>
        <link rel="stylesheet" type="text/css" href="../css/adm_site/view_site.css">
        <link rel="stylesheet" type="text/css" href="../css/adm_site/menu.css">
        <?php
            $pagina = "Criar Postagem";      
        ?>
    </head>
    
    <body>
        <?php include'menu.php';?>
        <div class="menu_view">
            <ul>
                <li><a href="view_site_index.php">Início</a></li>
                <li><a href="view_site_projetos.php">Projetos</a></li>
                <li><a href="view_site_sobre.php">Sobre</a></li>
                <li><a href="view_site_contato.php">Contato</a></li>
            </ul>

        </div>
        <div class="block">
        </div>
        
        <iframe src="../sobre.php"></iframe>
    </body>
</html>