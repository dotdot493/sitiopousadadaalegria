

	
<?php

header('Content-type: application/json');
header("Access-Control-Allow-Origin: *"); 
include 'conexao.php';

$con = mysqli_connect($host, $uname, $pwd, $database);

$data=array(); 

        $cliente=$_REQUEST['cliente'];
        $endereco=$_REQUEST['endereco'];
        $pedido=$_REQUEST['pedido'];
        $total=$_REQUEST['total'];
        $dia=date("Y-m-d");
        
        $sql = "INSERT INTO tbpedidos(cliente, dia, endereco, pedido, total)VALUES 
('$cliente', '$dia', '$endereco','$pedido', '$total')";
        
  
        if (mysqli_query($con, $sql)) {
          $data[]= "Registro inserido com sucesso!";
        } else {
          $data[]=  "Error: " . $sql . "<br>" . mysqli_error($con);
        }

echo json_encode($data); 

?>