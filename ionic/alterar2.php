<?php
include "verifica.php";
include "conexao.php";
mysqli_query($con, "UPDATE tbestoque SET produto='$_REQUEST[produto]', preco='$_REQUEST[preco]', tipo='$_REQUEST[tipo]' WHERE codigo='$_REQUEST[cod]'");
header("Location:inicial.php");
?>