<?php
        include 'verifica.php';
        include 'conexao.php';
      
        
         
        ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sitio Pousada da Alegria</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<style>
		.whatsapp-link {
			position: fixed;
			width: 60px;
			height: 60px;
			bottom: 40px;
			right: 40px;
			background-color: #25d366;
			color: #fff;
			border-radius: 50px;
			text-align: center;
			font-size: 30px;
			box-shadow: 1px 1px 2px #888;
			z-index: 1000;
		}
 
		.fa-whatsapp {
			margin-top: 16px;
		}
	</style>
  </head>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+55 31 8841-9120</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">contato@sitiopousadadaalegria.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">PRODUTOS FRESCOS &amp; SEM AGROTÓXICOS</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <?php
        include 'conexao.php';
        

 $q=mysqli_query($con, "SELECT * FROM tbpedidos"); 
        ?>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Encomendas do Dia</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="inicial.php" class="nav-link">PAGINA INICIAL</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">INSERIR</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="inserir1.php">Produtos</a>
              	
              
              	
              </div>
            </li>
            <li class="nav-item"><a target="_blank" href="/ionic/sitiovendas/exibirpedidos.php " class="nav-link">Encomendas</a></li>
	          
	          
	         
	          <li class="nav-item"><a target="_blank" href="https://br930.hostgator.com.br:2096/webmaillogout.cgi" class="nav-link">Webmail</a></li>
			  <li class="nav-item"><a target="_blank" target="_blank" href="sair.php" class="nav-link">SAIR</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
	  	<!--menu de pedidos -->
		
      
	<title><b></b>Área Administrativa</b></title>
	<section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
								<th>foto</th>
						        <th>Codigo</th>
								<th>Produto</th>
								<th>Tipo</th>
						        <th>Preco</th>
						        <th>Alterar Valor</th>
						        <th>Deletar</th>
						      </tr>
						        
						    </thead>
						    <tbody>
						      <tr class="text-center">
							  <?php
				$q=mysqli_query($con, "SELECT * FROM tbestoque");
                while ($row=mysqli_fetch_array($q)){		
                    echo("<tr><td><img src=uploads/foto$row[codigo].jpg width=50 height=50></td><td>$row[codigo]</td><td>$row[produto]</td><td>$row[tipo]</td><td>$row[preco]</td><td><a href=alterar.php?cod=$row[codigo]>Alterar</td><td><a href=deletar.php?cod=$row[codigo]>Excluir</td></tr>"); 
                }
                ?>

						        
						      </tr><!-- END TR-->

						      <tr class="text-center">
						        
						      </tr>
                  <!-- END TR-->
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    	
    		</div>
			</div>
			</div>
		</section>

	

	  

	      
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_12.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">PAGINA INICIAL</a></span> <span>CONTATO</span></p>
            <h1 class="mb-0 bread">CONTATO</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	<div class="row d-flex mb-5 contact-info">
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Endereco: Primeria direita na saida para Cataguarino</span><br><br>
				 
	          </div>
          </div>
		  
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Telefone::</span> <a href="tel://+55 31 8841-9120">+55 31 8841-9120</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Email:</span> <a href="contato@sitiopousadadaalegria.com">contato@sitiopousadadaalegria.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Website:</span> <a href="http://sitiopousadadaalegria.com " target="_blank">www.sitiopousadadaalegria.com</a></p>
	          </div>
          </div>
        </div>
	
		<!-- Formulário de Contato -->
      
	
    <footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Sitio Pousada da Alegria</h2>
              <p>Produtos fresquinhos todos os dias.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://www.google.com/maps/uv?pb=!1s0xa2d14630e079ed%3A0x7ce87305a26501ba!3m1!7e115!4shttps%3A%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipNVtDywUrzCAqoKdykF07CamyMI8JIFEb3Vxfkp%3Dw284-h160-k-no!5stwitter%20sitio%20pousada%20da%20alegria%20-%20Pesquisa%20Google!15sCgIgAQ&imagekey=!1e10!2sAF1QipNVtDywUrzCAqoKdykF07CamyMI8JIFEb3Vxfkp&hl=pt-BR&sa=X&ved=2ahUKEwj8j860x67vAhXIIbkGHV4-BFUQoiowEnoECCQQAw" target="blank"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/sitiopousadadaalegria-112834973641924" target="blank"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/sitiopousadadaalegria/" target="blank"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="shop.html" class="py-2 d-block">Compras</a></li>
                <li><a href="about.html" class="py-2 d-block">Sobre</a></li>
                <li><a href="contact.html" class="py-2 d-block">Contato</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Ajuda</h2>
              <div class="d-flex">
	              
	              <ul class="list-unstyled">
	                
	                <li><a href="contact.html" class="py-2 d-block">Contato</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Alguma pergunta?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">contato@sitiopousadadaalegria.com </span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+55 31 8841-9120 &amp; +55 31 8699-5109</span></a></li>
	                <li><a href="contact.html"><span class="icon icon-envelope"></span><span class="text">contato@pousadadaalegria.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os Direitos Reservados | Cataguases-MG <i class="icon-heart color-danger" aria-hidden="true"></i> <a href="" target="_blank">Jose Washington</a>
						 
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=553188419120" target="_blank">
    <i class="fa fa-whatsapp"></i>
  </a>
    
  </body>
</html>