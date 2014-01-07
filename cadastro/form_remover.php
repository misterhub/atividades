<html>
    <head>
        <title>Cadastro de Pessoas</title>   
    </head>
    <body>
    <center>
    <?php
        require_once("menu.php");
    ?>
        <form action="remover.php" method="post">
        ID para remover:</br><input type="text" name="id" /><br>
        <input type="submit" value="Remover" />
      </form>
    </center>
    </body>
</html>
<?php
    require_once("menu.php");

    session_start();
    
    if(isset($_SESSION["cadastros"])){
        $cadastros = $_SESSION["cadastros"];
        
        foreach($cadastros as $id => $pessoa){
            if($pessoa != null){
             echo "[$id] => $pessoa <br>";   
            }
            
        }
     
    }
    else{
        echo "Não existem pessoas cadastrada no banco de dados";
    }
?>
