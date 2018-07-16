<?php
    if($pagina=="Criar Postagem"){
        $link = "index.php";
    }
    if($pagina=="Visualizar Site"){
        $link = "view_site_index.php";
    }

?>
<body>
    <div class="menu">
        <ul>
<!--            <li><a href="index.php">Início</a></li>-->
            <li><a href="<?php echo($link); ?>"><?php echo($pagina); ?></a></li>
            <li><a href="../admin/logout.php">Sair</a></li>
        </ul>

    </div>
</body>