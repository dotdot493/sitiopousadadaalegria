<?php
$user = "id16324963_jose";
$password = "^cFntht1@sq>}f>w";
$database = "id16324963_materias";
$hostname = "localhost";
$conn = mysqli_connect($hostname, $user, $password, $database);
if(!$conn){
    die("Connection failed:". mysqli_connect_error());
}
$query = "SELECT * FROM tbestoque";
$result = mysqli_query($conn, $query);

?>

	<p>Solução de Economia de Energia para a Sua Casa. Reduza a sua Conta em Até 20%. Conheça! Sua Conta de Energia até 20% Mais Barata! Sem Riscos, Investimentos e Obras! Saiba mais! Cobrança Transparente.</p>
				<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
				  <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
				  <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
				  <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
				</ul>
			  </div>
			</div>
			<div class="col-md-6 col-lg">
			  <div class="ftco-footer-widget mb-4 ml-md-5">
				<h2 class="ftco-heading-2">Serviços</h2>
				<ul class="list-unstyled">
					<?php
				while($row = mysqli_fetch_assoc($result)){
    				echo "<li><a href='contact.php' class='py-1 d-block'><span class='fa fa-check mr-3'></span>$row[paineis]</a></li>";
    				echo "<li><a href='contact.php' class='py-1 d-block'><span class='fa fa-check mr-3'></span>$row[descricao]</a></li>";
    				echo "<li><a href='contact.php' class='py-1 d-block'><span class='fa fa-check mr-3'></span>$row[preco]</a></li>";
    				
	
				}
				  
				  ?>
				</ul>
			  </div>
			</div>
			<div class="col-md-6 col-lg">
			   <div class="ftco-footer-widget mb-4">
				<h2 class="ftco-heading-2">Horário Comercial</h2>
				<div class="opening-hours">
					<h4>Funcionamento:</h4>
					<p class="pl-3">