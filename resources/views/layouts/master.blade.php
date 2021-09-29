<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> ApiGroza </title>

	<!-- favicon -->
	<link rel="shortcut icon" href="./assets/img/bee.png">

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	  	
	<!-- FONT AWESOME -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

	<!-- OWL CAROUSEL -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

	<!-- CUSTOM CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<!-- HEADER -->
<header id="header">
	
	<nav class="navbar navbar-dark navbar-expand-lg color-primary-bg navbar-fixed-top">
		
		<a class="navbar-brand" href="index.php">ApiGroza</a>
		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="about_us.php">Despre noi </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="categorii.php">Categorii </a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Produse
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">

					<!-- Preluam categoriile din tabel, pentru a le putea adauga automat in pagina in momentul crearii unei noi categorii de administrator -->
					<a class="dropdown-item" href="produse_apicole.php?category=Produse_apicole">
							Produse apicole
						</a>
					</div>
				</li>

				<!-- Daca adminul e logat -->
				<!-- Modificari tabela produse -->
				<!-- <?php 
				if (isset($_SESSION['username']) && $_SESSION['username'] == 'admin'): ?> -->
					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Tabel Produse
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="./admin/produse.php">Lista produse</a>
						<a class="dropdown-item" href="./admin/insert.php">Adauga noi produse</a>
					</div>
					</li>
				<!-- <?php endif;?> -->

				<!-- Doar pentru admin -->
				<!-- Modificari tabela users -->
				<!-- <?php 
				if (isset($_SESSION['username']) && $_SESSION['username'] == 'admin'): ?> -->
					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Tabel Users
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="./admin/users.php">Lista users</a>
						<a class="dropdown-item" href="./admin/users_insert.php">Adauga user nou</a>
					</div>
					</li>
				<!-- <?php endif;?> -->
			
			</ul>

	<!-- 	<?php 
		if (isset($_SESSION['login'])):
		?>  --> 
		
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link text-white" href="cart.php"> 
				 <!-- (<?=$nr_items?>) --> 0
				 <i class="fa fa-shopping-cart" aria-hidden="true"></i>
				Cos de cumparaturi</a>
			</li>

			<li class="nav-item">
				<a href="logout.php" class="nav-link text-white">Logout</a>
			</li>
		</ul>
			
		<!-- <?php else: ?> -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="login.php">Login</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="register.php">Register</a>
			</li>
		</ul>
		
		<!-- <?php endif; ?>	 -->
		
		</div>
	</nav>
</header>
<!-- HEADER -->

	@yield('content')

<!-- FOOTER -->
<footer id="footer" class="text-white color-primary-bg py-4 mt-5">
	
	<div class="container">
		
		<div class="row">
		<!-- ApiGroza shop -->
			<div class="col-lg-3 col-md-6 col-12">
				<h4 class="font-raleway">ApiGroza</h4>
				<p></p>
			</div>
					
		<!-- Subscribe to Newsletter -->
			<div class="col-lg-4 col-md-6 col-12">
				<h4 class="font-raleway">Newsletter</h4>
				
				<form class="form-row">
					<div class="col">
						<input type="text" class="form-control" name="Email" placeholder="Email">
					</div>
							
					<div class="col">
						<button type="submit" class="btn btn-primary mb-2">Abonare</button>
					</div>
				
				</form>
			</div>
					
		<!-- Information -->
			<div class="col-lg-3 col-md-6 col-12">
				<h4 class="font-raleway">Informații</h4>
				<a href="about_us.php">Despre noi</a><br>
				<a href="">Livrare și retur</a><br>
				<a href="">Politici de confidențialitate</a><br>
				<a href="">Termeni și condiții</a>
			</div>
		
		<!-- Account -->
			<div class="col-lg-2 col-md-6 col-12">
				<h4 class="font-raleway"><a href="contul_meu.php">Contul meu</a></h4>
				<a href="">Administrare cont</a><br>
				<a href="orders_history.php">Istoric comenzi</a><br>
				<a href="">Newsletters</a>
			</div>
		
		</div>
		
		<!-- Copyright -->
		<div class="Copyright text-center mt-2">
			<p>&copy; Copyrights 2020 Designed By Olivia-Debora Moisi</p>
		</div>
	
	</div>
</footer>
<!-- FOOTER -->

<!-- JS -->
	<!-- BOOTSTRAP SCRIPTS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		
	<!-- OWL CAROUSEL JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
		
	<!-- CUSTOM SCRIPTS -->
	<script type="text/javascript" src="index.js"></script>
</body>
</html>
