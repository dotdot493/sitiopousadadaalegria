<?php
        include 'verifica.php';
?>
<html>
    <head>
        <title>Sistema Administrativo</title>
    </head>
    <body>
        <?php
        include 'conexao.php';
        include 'menu.php';

        $q=mysqli_query($con, "DELETE FROM tbpedidos where codigo=$_REQUEST[cod]"); 
        ?>
        
        <center>
        Pedido <?php echo $_REQUEST["cod"];?> Excluido.
        </center>
    </body>
</html>