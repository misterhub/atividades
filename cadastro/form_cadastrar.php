<html>
    <head>
        <title>Cadastro de Pessoas</title>   
    </head>
    <body>
    <center>
    <?php
        require_once("menu.php");
    ?>
    <form action="cadastrar.php" method="post">
        <b>Nome:</b> <input type="text" name="nome" />   
        <input type="submit" value="Enviar" />
      </form>
    </center>
    </body>
</html>
