<html>
    <head>
        <title>Cadastro de Produto</title>           
    </head>
    <body>
        <center>
        <fieldset>
        <?php
            require_once("menu.php");
        ?>
        <form action="cadastrar.php" method="post">
            <?php require_once("campos_produto.php"); ?>
            <input type="submit" value="Enviar" />
               
        </form>
        </fieldset>
        </center>      
        
    </body>
</html>
