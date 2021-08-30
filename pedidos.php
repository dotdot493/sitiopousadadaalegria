<!DOCTYPE html>
<html>
<meta charset="utf-8" />
    <head>
        <title>Sistema Administrativo</title>
    </head>
    <body>      
	


<body bgcolor="#B0C4DE">
	<center>
	<form method="post" action="sitiojsoninserir.php"enctype="multipart/form-data">>
		<h1>Faça sua Encomenda</h1>
	
<h3>
  <div class="row">
    <label >Nome do Cliente:</label><br />
    <input  class="input" name="cliente" type="text" value="" size="30" /><br />
  
  </div>
  
  <div class="row">
    <label>Endereço:</label><br />
    <textarea class="input" name="endereco" rows="4" cols="30"></textarea><br />
    
  </div>
  <div class="row">
    <label>Pedido:</label><br />
    <textarea  class="input" name="pedido" rows="4" cols="30"></textarea><br />
    
  </div><div class="row">
    <label >Total:</label><br />
    <input class="input" name="total" type="text" value="" size="30" /><br />
    
  </div>
  <br>
    
    <input type="submit" value="Fazer Pedido" style="color: #FFFFFF; background-color: #CC0000"/>
</form>
</h3>
</center>
</body>
</html>