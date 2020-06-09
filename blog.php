<?php
	$server = "localhost";
	$db = "mysitedb";
	$user = "id13782089_sisadmin";
	$password = "a*HqG!cc=8Qr80c3";
	$link = mysqli_connect($server, $user, $password, $db);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700|Poppins:600,700&amp;subset=cyrillic" rel="stylesheet">
	
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

	<style>
		.preloader{
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			z-index: 9999;
			background-color: #fefefe;
		}
	</style>

	<link rel="stylesheet" href="css/baguetteBox.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="img/logo2.png" style="width: 16px; height: 16px;">
<title> GreyRex</title>
</head>
<body>

	<div class="preloader d-flex justify-content-center align-items-center">
		<div class="spinner-border" style="width: 10rem; height: 10rem;" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>

	<button class="scrollToTop"><i class="fa fa-angle-up"></i></button>
	
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">
				<img src="img/logo.png" alt=""> GreyRex
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa fa-bars"></i>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link" href="index.html">Главная</a></li>
					<li class="nav-item"><a class="nav-link" href="blog.php">Блог</a></li>
					<li class="nav-item"><a class="nav-link" href="compani.html">О компании</a></li>
					<li class="nav-item"><a class="nav-link" href="work.html">Работы</a></li>
					<li class="nav-item"><a class="nav-link" href="Reviews.html">Отзывы</a></li>
					<li class="nav-item"><a class="nav-link" href="FAQ.php">Часто задаваемые вопросы</a></li>
					<li class="nav-item"><a class="nav-link" href="Team.html">Команда</a></li>
				</ul>
			</div>
		</nav>
	</header>

	<!-- Page Content  -->
	<div class="gred" style=" background: #f1f1f1;" >
    <div class="container">
		
		<br>
		<!-- Page Heading -->
		<h1 class="my-4" style="text-align: center;">Последние записи
		  
		</h1>
		<hr class="soften" style="background: radial-gradient(at center, #ff0000 , #f1f1f1) !important;">
		<?php
			mysqli_select_db($link, $db);
			$query = "SELECT `id`, `title`, `text_title`, `title_main`, `text_main`, DATE_FORMAT(`created`, '%d.%m%.%Y') as creat, `img_path` FROM `blog` ORDER BY created DESC";
			$result = mysqli_query($link, $query);
			while($note = mysqli_fetch_array($result)):
		?>
		<div class="row">
		  <div class="col-md-7">
			<a href="#">
			  <img class="img-fluid rounded mb-3 mb-md-0" src="<?php echo $note['img_path'];?>" alt="">
			</a>
		  </div>
		  <div class="col-md-5">
			<h3><?php echo $note['title'];?></h3>
			<p><span class="article-date"><i class="far fa-calendar-alt"></i><?php echo $note['creat'];?></span></p>
			<p><?php echo $note['text_title'];?></p>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong<?php echo $note['id']; ?>">
				Читать далее
			  </button>
			  
			  <!-- Modal -->
			  <div class="modal fade" id="exampleModalLong<?php echo $note['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				<div class="modal-dialog" role="document">
				  <div class="modal-content">
					<div class="modal-header">
					  <h5 class="modal-title" id="exampleModalLong<?php echo $note['id']; ?>Title"><?php echo $note['title_main'];?></h5>
					  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					  </button>
					</div>
					<div class="modal-body">
						<?php echo $note['text_main'];?>
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
					</div>
				  </div>
				</div>
			  </div>
		  </div>
		</div>
		<hr>
		<?php endwhile ?>
		
		<br>
		<br>
	 
		
	</div>
	</div>
			

	<footer class="bg-white">
		<div class="container py-5" style="height: 350px;">
		  <div class="row py-4"> 
			<div class="col-lg-4 col-md-6 mb-4 mb-lg-0"><img src="img/logo2.png" alt="" width="40" height="40" class="mb-3"> <span style="font-weight: 600;"> GreyRex</span> 
			  <p class="font-italic text-muted">Международное качество по локальным ценам.</p>
			  <ul class="list-inline mt-4">
				<li class="list-inline-item"><a href="https://twitter.com/CrazyTh77832463" target="_blank" title="twitter"><i class="fa fa-twitter fa-2x" style="color:rgb(48, 53, 48);"></i></a></li>
				<li class="list-inline-item"><a href="https://www.facebook.com/blacklik.show" target="_blank" title="facebook"><i class="fa fa-facebook fa-2x" style="color:rgb(48, 53, 48);"></i></a></li>
				<li class="list-inline-item"><a href="https://www.instagram.com/TED" target="_blank" title="instagram"><i class="fa fa-instagram fa-2x"style="color:rgb(48, 53, 48);"></i></a></li>
				<li class="list-inline-item"><a href="https://www.patreon.com/teded" target="_blank" title="pinterest"><i class="fa fa-pinterest fa-2x" style="color:rgb(48, 53, 48);"></i></a></li>
				<li class="list-inline-item"><a href="https://vimeo.com/aaronmcadams" target="_blank" title="vimeo"><i class="fa fa-vimeo fa-2x" style="color:rgb(48, 53, 48);"></i></a></li>
			  </ul>
			</div>
		
<br>
			  <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
			  <ul class="list-unstyled mb-0">
				<li class="mb-2"><a href="blog.php" class="text-muted">Блог</a></li>
				<li class="mb-2"><a href="compani.html" class="text-muted">О компании</a></li>
				<li class="mb-2"><a href="work.html" class="text-muted">Работы</a></li>
			
			  </ul>
			</div>
			
<br>
			  <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
			  <ul class="list-unstyled mb-0">
				<li class="mb-2"><a href="Reviews.html" class="text-muted">Отзывы</a></li>
				<li class="mb-2"><a href="FAQ.php" class="text-muted">FAQ</a></li>
				<li class="mb-2"><a href="Team.html" class="text-muted">Команда</a></li>

			  </ul>
			</div>
			<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 180px; width: 320px;">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d561.2752280224017!2d37.626029229284434!3d55.756749198784654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a595d933277%3A0x84be90c8d285b584!2z0JzQtdC00LjQsCDQkdGN0Lk!5e0!3m2!1sru!2sus!4v1587989153527!5m2!1sru!2sus"   style="border:0" allowfullscreen></iframe>
			  </div>
			  
		  </div>
		</div>
	
		
	  </footer>



	  <script src="https://use.fontawesome.com/4699b29e4e.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>